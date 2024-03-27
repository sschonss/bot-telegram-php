<?php

namespace App\Comunication;

use Dotenv\Dotenv;

class Chat
{
    private string $telegram_bot_token;

    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();

        $this->telegram_bot_token = $_ENV['TELEGRAM_BOT_TOKEN'];
    }

    public function getIDChats(): array
    {
        $url = 'https://api.telegram.org/bot' . $this->telegram_bot_token . '/getUpdates';
        $response = file_get_contents($url);
        $response = json_decode($response, true);

        $chats = [];

        foreach ($response['result'] as $chat) {
            $chats[] = $chat['message']['chat']['id'];
        }

        return array_unique($chats);
    }

    public function getNameByChatID($chat_id): string
    {
        $url = 'https://api.telegram.org/bot' . $this->telegram_bot_token . '/getUpdates';
        $response = file_get_contents($url);
        $response = json_decode($response, true);

        foreach ($response['result'] as $chat) {
            if ($chat['message']['chat']['id'] == $chat_id) {
                return $chat['message']['chat']['first_name'] . ' ' . $chat['message']['chat']['last_name'];
            }
        }

        return '';
    }

}