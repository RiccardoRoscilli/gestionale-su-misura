<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richiesta Demo Ricevuta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 0 0 10px 10px;
        }
        .highlight {
            background: #e3f2fd;
            padding: 15px;
            border-left: 4px solid #2196f3;
            margin: 20px 0;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #666;
            font-size: 14px;
        }
        .btn {
            display: inline-block;
            background: #28a745;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🎉 Richiesta Demo Ricevuta!</h1>
        <p>Grazie per il tuo interesse in Gestionale Su Misura</p>
    </div>
    
    <div class="content">
        <p>Ciao <strong>{{ $lead->name }}</strong>,</p>
        
        <p>Abbiamo ricevuto la tua richiesta per una demo personalizzata del nostro gestionale su misura. Siamo entusiasti di poterti aiutare!</p>
        
        <div class="highlight">
            <h3>📋 Dettagli della tua richiesta:</h3>
            <ul>
                <li><strong>Nome:</strong> {{ $lead->name }}</li>
                <li><strong>Email:</strong> {{ $lead->email }}</li>
                @if($lead->phone)
                <li><strong>Telefono:</strong> {{ $lead->phone }}</li>
                @endif
                @if($lead->company)
                <li><strong>Azienda:</strong> {{ $lead->company }}</li>
                @endif
            </ul>
            
            <p><strong>Descrizione delle tue esigenze:</strong></p>
            <p style="background: white; padding: 15px; border-radius: 5px;">{{ $lead->description }}</p>
        </div>
        
        <h3>⏰ Cosa succede ora?</h3>
        <ol>
            <li><strong>Analisi (entro 2 ore):</strong> Il nostro team analizzerà le tue esigenze</li>
            <li><strong>Demo personalizzata (entro 24h):</strong> Ti prepareremo una demo su misura</li>
            <li><strong>Presentazione:</strong> Ti contatteremo per programmare la presentazione</li>
        </ol>
        
        <div style="text-align: center;">
            <a href="https://wa.me/393282914852" class="btn">💬 Contattaci su WhatsApp</a>
        </div>
        
        <div class="highlight">
            <h4>🚀 Nel frattempo, puoi provare le nostre demo esistenti:</h4>
            <ul>
                <li><a href="https://pulizie.modulioscommerce.com">Demo Gestionale Pulizie</a></li>
                <li><a href="https://glowell.modulioscommerce.com">Demo E-commerce Manager</a></li>
                <li><a href="https://teaerp.modulioscommerce.com">Demo ERP Completo</a></li>
            </ul>
            <p><small>Credenziali: <strong>admin@demo.it</strong> / <strong>demo123</strong></small></p>
        </div>
    </div>
    
    <div class="footer">
        <p><strong>PromoWeb Studio di R. Roscilli</strong><br>
        P.I. 10587780585 | Via Molfetta 24, 00171 Roma<br>
        <a href="https://wa.me/393282914852">WhatsApp: +39 328 291 4852</a></p>
        
        <p style="font-size: 12px; color: #999;">
            Hai ricevuto questa email perché hai richiesto una demo su gestionale-su-misura.it<br>
            Se non hai fatto questa richiesta, puoi ignorare questa email.
        </p>
    </div>
</body>
</html>