<?php

require 'vendor/autoload.php';

use App\Comunication\Bot;
use App\Comunication\Chat;
use App\Comunication\Message;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);

$dotenv->load();
$chats = new Chat();
$chats_list = $chats->getIDChats();

for ($i = 0; $i < count($chats_list); $i++) {
    $bot = new Bot($_ENV['TELEGRAM_BOT_TOKEN'], $chats_list[$i]);

    try {
        $bot->send((new Message($chats->getNameByChatID($chats_list[$i])))->getMessage());
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


