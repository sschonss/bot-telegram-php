<?php

namespace App\Comunication;

class Message
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getMessage(): string
    {
        return 'Hello ' . $this->name . ', it is a pleasure to meet you!';
    }
}
