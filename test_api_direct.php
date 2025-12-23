<?php

/**
 * Direct API test for Task Manager integration
 */

$url = 'https://taskman.modulioscommerce.com/api/leads/create';
$data = [
    'name' => 'Test User',
    'email' => 'test@example.com',
    'description' => 'Test integration from website',
    'source' => 'test',
    'api_key' => 'gestionale_su_misura_2024_secure_key_12345'
];

echo "🧪 Testing API endpoint: $url\n\n";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Accept: application/json'
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For testing only

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);
curl_close($ch);

echo "📊 Results:\n";
echo "HTTP Code: $httpCode\n";

if ($error) {
    echo "❌ cURL Error: $error\n";
} else {
    echo "✅ Response received\n";
    echo "Response: $response\n";
}

if ($httpCode == 200) {
    echo "\n🎉 API is working correctly!\n";
} elseif ($httpCode == 404) {
    echo "\n❌ Endpoint not found - check if files are deployed\n";
} elseif ($httpCode == 401) {
    echo "\n🔐 Authentication error - check API key\n";
} else {
    echo "\n⚠️  Unexpected response code\n";
}

echo "\n📋 Deployment checklist:\n";
echo "1. ✅ Git push completed\n";
echo "2. ⏳ Pull on production server\n";
echo "3. ⏳ Add WEBSITE_API_KEY to .env\n";
echo "4. ⏳ Run php artisan config:cache\n";
echo "5. ⏳ Run php artisan route:cache\n";
?>