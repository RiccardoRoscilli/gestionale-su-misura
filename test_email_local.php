<?php

/**
 * Test email sending with SendGrid SMTP
 */

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Lead;
use App\Mail\LeadSubmittedMail;
use Illuminate\Support\Facades\Mail;

echo "🧪 Testing SendGrid Email Configuration...\n\n";

// Create a test lead
$testLead = new Lead([
    'name' => 'Test User SendGrid',
    'email' => 'riccardo.roscilli@gmail.com', // Cambia con la tua email
    'phone' => '+39 123 456 7890',
    'company' => 'Test Company SendGrid',
    'description' => 'Test email configuration with SendGrid SMTP in local environment',
    'source' => 'sendgrid_test'
]);

echo "📤 Sending test email via SendGrid to: {$testLead->email}\n";
echo "📋 Test data:\n";
echo "   Name: {$testLead->name}\n";
echo "   Company: {$testLead->company}\n";
echo "   Description: {$testLead->description}\n\n";

echo "📧 Current mail configuration:\n";
echo "   Driver: " . config('mail.default') . "\n";
echo "   Host: " . config('mail.mailers.smtp.host') . "\n";
echo "   Port: " . config('mail.mailers.smtp.port') . "\n";
echo "   From: " . config('mail.from.address') . "\n";
echo "   From Name: " . config('mail.from.name') . "\n\n";

try {
    // Send the email
    Mail::to($testLead->email)->send(new LeadSubmittedMail($testLead));
    
    echo "✅ Email sent successfully via SendGrid!\n\n";
    echo "📧 Check your email inbox: {$testLead->email}\n";
    echo "📋 Email details:\n";
    echo "   Subject: Richiesta Demo Ricevuta - Gestionale Su Misura\n";
    echo "   Template: Customer confirmation email (HTML)\n";
    echo "   Content: Welcome message with demo links and contact info\n";
    
} catch (Exception $e) {
    echo "❌ Error sending email: " . $e->getMessage() . "\n";
    echo "\n🔧 Troubleshooting:\n";
    echo "1. Check SendGrid API key in .env\n";
    echo "2. Verify sender email is verified in SendGrid\n";
    echo "3. Check SendGrid activity logs\n";
    echo "4. Ensure MAIL_MAILER=smtp in .env\n";
}

echo "\n✅ Test completed\n";

?>