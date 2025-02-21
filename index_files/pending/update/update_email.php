<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['new_email'])) {
    $new_email = filter_var($_POST['new_email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($new_email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['email'] = $new_email;
        header("Location: ./index.php"); // Redirige vers la page 4 ou une autre page souhaitée
        exit;
    } else {
        echo "Adresse e-mail invalide.";
    }
} else {
    echo "Une erreur s'est produite.";
}
