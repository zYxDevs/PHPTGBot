<?php

require_once './PHPTGBot/PHPTelebot.php';
$bot = new PHPTelebot('TOKEN', 'BOT_USERNAME'); // Bot username is optional, its required for handle command that contain username (/command@username) like on a group.

// Simple command
$bot->cmd('*', 'Hi, human! I am a bot.');

// Simple echo command
$bot->cmd('/echo|/say', function ($text) {
    if ($text == '') {
        $text = 'Command usage: /echo [text] or /say [text]';
    }
    return Bot::sendMessage($text);
});

// Simple whoami command
$bot->cmd('/whoami|!whoami', function () {
    // Get message properties
    $message = Bot::message();
    $name = $message['from']['first_name'];
    $userId = $message['from']['id'];
    $text = 'You are <b>'.$name.'</b> and your ID is <code>'.$userId.'</code>';
    $options = [
        'parse_mode' => 'html',
        'reply' => true
    ];

    return Bot::sendMessage($text, $options);
});

$bot->run();
