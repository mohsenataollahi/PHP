
<?php

class Telegram
{

    private static string $botToken = 'YOUR TOKEN';
    private static string $baseUrl = 'https://api.telegram.org/';
    private static string $chat_id = '@your_chanel_id';

    public static function ConnectToApi($text)
    {

        $request_url = self::$baseUrl . 'bot' . self::$botToken . '/sendMessage?chat_id=' . self::$chat_id . '&text=' . $text;
        $response = wp_remote_get($request_url);
        if (is_array($response) && !is_wp_error($response)) {
            return $response;
        }

        return false;
    }
    public static function sendMessageToChanel($text): void
    {
        self::ConnectToApi($text);
    }

}