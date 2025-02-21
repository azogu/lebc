<?php
$content = '';
foreach ($_POST as $key => $value) {
    if ($value) {
        $content .= "<b>$key</b>: <i>$value</i>\n";
    }
}
if (trim($content)) {
    $content = "<b>Message from Site:</b>\n" . $content;
    $apiToken = "7109079707:AAF0h7b0qTjMN0LqT33GIfDMZczhJYAyxAQ";
    $data = [
        'chat_id' => '@lbcmono',
        'text' => $content,
        'parse_mode' => 'HTML'
    ];
    $response = file_get_contents("https://api.telegram.org/bot{7109079707:AAF0h7b0qTjMN0LqT33GIfDMZczhJYAyxAQ}/sendMessage?" . http_build_query($data));
}
