<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = 'Bot Token';
$bot_username = 'Bot Username';
$hook_url     = 'https://www.cyberindonesia001/phptgbot/hook.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}
