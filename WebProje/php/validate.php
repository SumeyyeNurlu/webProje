<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
            <?php
            // Formdan gelen verileri al
            if ($_SERVER["REQUEST_METHOD"] == "POST")
             {
                $email = $_POST['email'];
                $password = $_POST['password'];

                // E-posta ve şifre doğrulaması yap
                if ($email == 'g231210053@ogr.sakarya.edu.tr' && $password == '123456')
                {   
                    echo "Giriş başarılı!!!!!!!!!!!!!!!!!!!!!!!!";
                }
                 else 
                {
                    // Giriş başarısızsa hata mesajı 
                    echo "Hatalı e-posta veya şifre.!!!!!!!!!!!!!!!!!";
                    $_SESSION['login_error'] = "Geçersiz e-posta veya şifre. Tekrar deneyin.";
                    header("Location: ../login.html");
                }
            }
            
            ?>
         <!-- </div>
    </div>  -->
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>