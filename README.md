# PHP in WordPress
PHP sample codes that I tested and used:

# Telegram 

This class was created to send text to your channel in Telegram.


## Describtion

This is a simple and functional code to connect to Telegram api to send text.



## Usage
Before using it, you need to create a bot in Telegram and get a token from it.
Read this document: [Telegram Api's]( https://core.telegram.org/bots/api#sendmessage)
```php
include'./Telegram.php'

# just call and pass your text as a string. : 
$text = 'my message';
sendMessageToChanel($text);
```



