<script>
    // Provenienza del visitatore (annuncio, ricerca, social...), presa alla prima
    // pagina della visita e inviata col modulo di contatto. Resta nel sessionStorage
    // della scheda: niente cookie e niente dati personali, si cancella alla chiusura.
    (function () {
        var KEY = 'gsmAttribution';

        function detect() {
            var params = new URLSearchParams(location.search);
            var landing = location.pathname;
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
                    if (host && host !== location.hostname.replace(/^www\./, '')) {
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
            // annuncio o pagina di settore ha portato il contatto.
            if (!attr.utm_campaign) {
                attr.utm_campaign = landing;
            }
            return attr;
        }

        try {
            if (!sessionStorage.getItem(KEY)) {
                sessionStorage.setItem(KEY, JSON.stringify(detect() || { utm_source: 'direct', utm_medium: null, utm_campaign: location.pathname }));
            }
        } catch (e) {}

        window.getAttribution = function () {
            try {
                return JSON.parse(sessionStorage.getItem(KEY)) || {};
            } catch (e) {
                return {};
            }
        };
    })();
</script>
