<?php

require_once 'bootstrap.php';

$botContext = new \Sumrak\TelegramBot\TelegramBotContext('Your bot api token here');
$bot = new \Sumrak\TelegramBot\TelegramBot($botContext);

try {
    $lastMessageId = null;
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

    $bot->getMe();

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
        'teext',
        null,
        null,
        null,
        $lastMessageId,
        $replyMarkup
    );
} catch (\Sumrak\TelegramBot\Exception\ApiException $e) {
    var_dump($e->getMessage());
}

