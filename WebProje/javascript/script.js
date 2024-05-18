

// javascript/validation.js

function validateForm() {
    // E-posta ve şifre inputlarını alın
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // E-posta doğrulama (örnek olarak basit bir regex kullanılıyor)
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Lütfen bu alanı doldurun.');
        return false;
    }

    // Şifre doğrulama (en az 6 karakter uzunluğunda olmalı)
    if (password.length < 6) {
        alert('Şifreniz en az 6 karakter uzunluğunda olmalıdır.');
        return false;
    }

    // Doğrulama başarılıysa form gönderilir
    return true;
}
