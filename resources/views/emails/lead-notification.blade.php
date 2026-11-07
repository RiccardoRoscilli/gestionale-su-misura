<!DOCTYPE html>
<html lang="it">
<head><meta charset="utf-8"></head>
<body style="font-family: Arial, sans-serif; color: #222; line-height: 1.5;">
    <h2 style="margin: 0 0 16px;">Nuova richiesta da gestionale-su-misura.com</h2>
    <table cellpadding="6" style="border-collapse: collapse;">
        <tr><td><strong>Nome</strong></td><td>{{ $lead->name }}</td></tr>
        <tr><td><strong>Email</strong></td><td><a href="mailto:{{ $lead->email }}">{{ $lead->email }}</a></td></tr>
        <tr><td><strong>Telefono</strong></td><td>{{ $lead->phone ?: '-' }}</td></tr>
        <tr><td><strong>Azienda</strong></td><td>{{ $lead->company ?: '-' }}</td></tr>
        @if($lead->utm_source || $lead->utm_campaign)
        <tr><td><strong>Provenienza</strong></td><td>{{ trim(($lead->utm_source ?? '') . ' / ' . ($lead->utm_medium ?? '') . ' / ' . ($lead->utm_campaign ?? ''), ' /') }}</td></tr>
        @endif
        <tr><td><strong>Ricevuta</strong></td><td>{{ $lead->created_at?->timezone('Europe/Rome')->format('d/m/Y H:i') }}</td></tr>
    </table>
    <h3 style="margin: 20px 0 8px;">Esigenze</h3>
    <p style="white-space: pre-line; background: #f5f5f7; padding: 12px; border-radius: 6px;">{{ $lead->description }}</p>
    <p style="color: #666; font-size: 13px;">Rispondi a questa email per scrivere direttamente al cliente.</p>
</body>
</html>
