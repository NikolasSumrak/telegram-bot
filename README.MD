# Telegram Bot 
[![Latest Version](https://img.shields.io/github/v/tag/NikolasSumrak/telegram-bot?label=Latest&style=flat-square)](https://github.com/NikolasSumrak/telegram-bot/releases)
[![Travis (.com) branch](https://img.shields.io/travis/com/NikolasSumrak/telegram-bot/master?style=flat-square)](https://travis-ci.com/github/NikolasSumrak/telegram-bot)
[![Total Downloads](https://img.shields.io/packagist/dt/sumrak/telegram-bot.svg?style=flat-square)](https://packagist.org/packages/sumrak/telegram-bot)
![Coverage](https://img.shields.io/codecov/c/github/NikolasSumrak/telegram-bot?style=flat-square)

Based on objects (all data is objects).

Usage:
```
$botContext = new \Sumrak\TelegramBot\TelegramBotContext('your api token here');
$bot = new \Sumrak\TelegramBot\TelegramBot($botContext);
```

## Getting updates
```
$bot->getUpdates();
```
## Get request in Webhook
```
$input = file_get_contents('php://input');
$serializer = new \Sumrak\TelegramBot\Serializer\TelegramApiSerializer();
$updates = $this->serializer->unserialize(\Sumrak\TelegramBot\Entity\Update::class . '[]', $content);
```