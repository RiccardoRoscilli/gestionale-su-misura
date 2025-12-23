<!-- Demo Login Information Card -->
<div class="demo-login-info card border-primary mb-4">
    <div class="card-header bg-primary text-white">
        <h5 class="card-title mb-0">
            <i class="fas fa-key me-2"></i>
            Accesso Demo - Credenziali di Test
        </h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label fw-bold">Email:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" value="{{ $email ?? 'admin@demo.it' }}" readonly>
                        <button class="btn btn-outline-secondary copy-btn" type="button" data-copy="{{ $email ?? 'admin@demo.it' }}">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label fw-bold">Password:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" value="{{ $password ?? 'demo123' }}" readonly>
                        <button class="btn btn-outline-secondary copy-btn" type="button" data-copy="{{ $password ?? 'demo123' }}">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="alert alert-info mb-0">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <i class="fas fa-info-circle me-2"></i>
                    <strong>Puoi copiare le credenziali</strong> e incollarle nel form di login, oppure cliccare il pulsante qui sotto per accedere automaticamente.
                </div>
                <div class="col-md-4 text-md-end">
                    <button type="button" class="btn btn-success auto-login-btn" 
                            data-email="{{ $email ?? 'admin@demo.it' }}" 
                            data-password="{{ $password ?? 'demo123' }}">
                        <i class="fas fa-sign-in-alt me-2"></i>
                        Accedi Automaticamente
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Copy to clipboard functionality
    document.querySelectorAll('.copy-btn').forEach(button => {
        button.addEventListener('click', function() {
            const textToCopy = this.getAttribute('data-copy');
            navigator.clipboard.writeText(textToCopy).then(() => {
                const icon = this.querySelector('i');
                const originalClass = icon.className;
                icon.className = 'fas fa-check text-success';
                
                setTimeout(() => {
                    icon.className = originalClass;
                }, 2000);
            });
        });
    });
    
    // Auto login functionality
    document.querySelectorAll('.auto-login-btn').forEach(button => {
        button.addEventListener('click', function() {
            const email = this.getAttribute('data-email');
            const password = this.getAttribute('data-password');
            
            // Fill login form if it exists
            const emailField = document.querySelector('input[name="email"], input[type="email"]');
            const passwordField = document.querySelector('input[name="password"], input[type="password"]');
            
            if (emailField && passwordField) {
                emailField.value = email;
                passwordField.value = password;
                
                // Trigger change events
                emailField.dispatchEvent(new Event('change'));
                passwordField.dispatchEvent(new Event('change'));
                
                // Try to submit the form
                const form = emailField.closest('form');
                if (form) {
                    // Add a small delay to ensure fields are filled
                    setTimeout(() => {
                        form.submit();
                    }, 100);
                }
            } else {
                // If no form found, show alert with credentials
                alert(`Credenziali Demo:\nEmail: ${email}\nPassword: ${password}`);
            }
        });
    });
});
</script>

<style>
.demo-login-info {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.demo-login-info .form-control[readonly] {
    background-color: #f8f9fa;
    font-family: monospace;
    font-weight: bold;
}

.copy-btn:hover {
    background-color: #e9ecef;
}

.auto-login-btn {
    transition: all 0.2s ease;
}

.auto-login-btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
</style>