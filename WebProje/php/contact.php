<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Verileri metin dosyasına ekle
    $file = fopen("messages.txt", "a");
    fwrite($file, "Ad: " . $first_name . "\n");
    fwrite($file, "Soyad: " . $last_name . "\n");
    fwrite($file, "E-posta: " . $email . "\n");
    fwrite($file, "Mesaj: " . $message . "\n\n");
    fclose($file);

    // Başarılı bir şekilde gönderildiğini belirten bir mesaj göster
    echo "Mesajınız başarıyla gönderildi. Teşekkür ederiz!";
} else {
    // Doğrudan bu sayfaya erişimi engelle
    header("Location: index.html");
}
?>
