# PHP BOT Telegram

This is a simple PHP Telegram Bot that uses the [Telegram Bot API](https://core.telegram.org/bots/api) to send messages to a Telegram user.

## Requirements

- PHP 7.0 or higher
- Composer
- A Telegram Bot Token

## Installation

1. Clone this repository
2. Run `composer install`
3. Create a `.env` file in the root directory of the project and add the following:

```
TELEGRAM_BOT_TOKEN=YOUR_BOT_TOKEN
```

4. Write your message in the class `Message` in the method `getMessage()`
5. Run the script with `php index.php`

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
