<?php

require_once './src/PHPTelebot.php';
$bot = new PHPTelebot('TOKEN', 'BOT_USERNAME'); // Bot username is optional, its required for handle command that contain username (/command@username) like on a group.

// Simple photo upload
$bot->cmd('/upload', function () {
    $file = '/path/to/photo.png'; // File path, file id, or url.
    return Bot::sendPhoto($file);
});

$bot->run();
