# Telegram Bot 
[![Latest Version](https://img.shields.io/github/v/tag/NikolasSumrak/telegram-bot?label=Latest&style=flat-square)](https://github.com/NikolasSumrak/telegram-bot/releases)
[![Travis (.com) branch](https://img.shields.io/travis/com/NikolasSumrak/telegram-bot/master?style=flat-square)](https://travis-ci.com/github/NikolasSumrak/telegram-bot)
[![Total Downloads](https://img.shields.io/packagist/dt/sumrak/telegram-bot.svg?style=flat-square)](https://packagist.org/packages/sumrak/telegram-bot)
![Coverage](https://img.shields.io/codecov/c/github/NikolasSumrak/telegram-bot?style=flat-square)

Based on objects (all data is objects).

# Installation
```
composer require sumrak/telegram-bot
```

# Usage:
```php
$botContext = new \Sumrak\TelegramBot\TelegramBotContext('your api token here');
$bot = new \Sumrak\TelegramBot\TelegramBot($botContext);
```

## Getting updates
```php
$updates = $bot->getUpdates();

foreach ($updates as $update) {
    echo $update->getUpdateId();
    echo ": ";
    if ($update->getMessage()) {
        echo $update->getMessage()->getChat()->getId() . ' - ' . $update->getMessage()->getText();
        $lastMessageId = $update->getMessage()->getMessageId();
    } else {
        echo 'Not Message Update';
    }
    echo PHP_EOL;
}
```
## Get request in Webhook
```php
$content = file_get_contents('php://input');
$serializer = new \Sumrak\TelegramBot\Serializer\TelegramApiSerializer();
$update = $serializer->deserialize(\Sumrak\TelegramBot\Entity\Update::class, $content);
```

### Sending Messages
```php
$replyMarkup = new \Sumrak\TelegramBot\Entity\ReplyKeyboardMarkup();
$button1 = new \Sumrak\TelegramBot\Entity\KeyboardButton();
$button1->setText('Button1');

$button2 = new \Sumrak\TelegramBot\Entity\KeyboardButton();
$button2->setText('Button2');
$replyMarkup->setKeyboard([[
    $button1,
    $button2
]]);

$bot->sendMessage(
    218081419,
    'Some Text',
    \Sumrak\TelegramBot\TelegramBot::PARSE_MODE_MARKDOWN_V2,
    null,
    null,
    $lastMessageId,
    $replyMarkup
);
```