<?php

namespace App\Comunication;

use TelegramBot\Api\BotApi;

class Bot
{
    private string $telegram_bot_token;
    private string $telegram_chat_id;

    public function __construct(string $telegram_bot_token, string $telegram_chat_id)
    {
        $this->telegram_bot_token = $telegram_bot_token;
        $this->telegram_chat_id = $telegram_chat_id;
    }

    /**
     * @throws \Exception
     */
    public function send($message): \TelegramBot\Api\Types\Message
    {
        $bot = new BotApi($this->telegram_bot_token);

        return $bot->sendMessage($this->telegram_chat_id, $message);
    }
}
