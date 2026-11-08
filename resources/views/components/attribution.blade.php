<script>
    // Provenienza del visitatore (annuncio, ricerca, social...), inviata col modulo
    // di contatto e coi clic sulle demo. Resta nel localStorage del browser per 30
    // giorni, così vale anche se torna dopo aver provato una demo o un altro giorno.
    // Dato tecnico di prima parte: niente cookie, niente terze parti, niente dati personali.
    (function () {
        var KEY = 'gsmAttribution';
        var TTL = 30 * 24 * 60 * 60 * 1000;
        // Domini nostri: arrivare da una demo non è una nuova provenienza.
        var OWN = /(^|\.)(gestionale-su-misura\.(com|it)|elimina-code-digitale\.com)$/;

        function detect() {
            var params = new URLSearchParams(location.search);
            var attr = {
                utm_source: params.get('utm_source'),
                utm_medium: params.get('utm_medium'),
                utm_campaign: params.get('utm_campaign'),
            };

            if (!attr.utm_source) {
                if (params.has('oppref') || params.has('olref')) {
                    attr.utm_source = 'chatgpt';
                    attr.utm_medium = 'cpc';
                } else if (params.has('gclid') || params.has('gbraid') || params.has('wbraid')) {
                    attr.utm_source = 'google';
                    attr.utm_medium = 'cpc';
                } else if (params.has('fbclid')) {
                    attr.utm_source = 'facebook';
                    attr.utm_medium = 'social';
                } else if (document.referrer) {
                    var host = '';
                    try { host = new URL(document.referrer).hostname.replace(/^www\./, ''); } catch (e) {}
                    if (host && !OWN.test(host)) {
                        var search = /(^|\.)(google|bing|duckduckgo|yahoo|ecosia)\./.exec(host);
                        if (search) {
                            attr.utm_source = search[2];
                            attr.utm_medium = 'organic';
                        } else if (/(^|\.)(chatgpt\.com|openai\.com)$/.test(host)) {
                            attr.utm_source = 'chatgpt';
                            attr.utm_medium = 'referral';
                        } else if (/(^|\.)(facebook\.com|instagram\.com|linkedin\.com|t\.co)$/.test(host)) {
                            attr.utm_source = host.split('.')[0];
                            attr.utm_medium = 'social';
                        } else {
                            attr.utm_source = host;
                            attr.utm_medium = 'referral';
                        }
                    }
                }
            }

            if (!attr.utm_source) {
                return null;
            }
            // Senza una campagna esplicita annotiamo la pagina d'arrivo: dice quale
            // annuncio o pagina di settore ha portato il visitatore.
            if (!attr.utm_campaign) {
                attr.utm_campaign = location.pathname;
            }
            return attr;
        }

        function read() {
            try {
                var saved = JSON.parse(localStorage.getItem(KEY));
                return saved && saved.at && Date.now() - saved.at < TTL ? saved : null;
            } catch (e) {
                return null;
            }
        }

        // Una nuova provenienza vera (annuncio, ricerca...) sostituisce la precedente;
        // un accesso diretto o da una nostra demo tiene quella già salvata.
        try {
            var found = detect();
            if (found || !read()) {
                var attr = found || { utm_source: 'direct', utm_medium: null, utm_campaign: location.pathname };
                attr.at = Date.now();
                localStorage.setItem(KEY, JSON.stringify(attr));
            }
        } catch (e) {}

        window.getAttribution = function () {
            var saved = read() || {};
            return { utm_source: saved.utm_source, utm_medium: saved.utm_medium, utm_campaign: saved.utm_campaign };
        };

        // Clic verso una demo (sottodomini nostri o elimina code): lo registriamo sul
        // server con la provenienza, così sappiamo chi l'ha aperta anche senza consenso.
        document.addEventListener('click', function (event) {
            var link = event.target.closest && event.target.closest('a[href]');
            if (!link || !navigator.sendBeacon) {
                return;
            }
            var url;
            try { url = new URL(link.href, location.href); } catch (e) { return; }
            var host = url.hostname.replace(/^www\./, '');
            if (!OWN.test(host) || host === location.hostname.replace(/^www\./, '')) {
                return;
            }
            var data = new FormData();
            var attr = window.getAttribution();
            data.append('demo', host);
            data.append('page', location.pathname);
            ['utm_source', 'utm_medium', 'utm_campaign'].forEach(function (field) {
                if (attr[field]) {
                    data.append(field, String(attr[field]).slice(0, 100));
                }
            });
            navigator.sendBeacon(@json(route('demo.track')), data);
        });
    })();
</script>
