<?php



require "vendor/autoload.php";

$access_token = '6D+01eig436Njakvxmrdvc98eZ+x9S56W7p/J9m61gghqCSJ9ilqy4QZumarStF0qETOeBoD9b99M1Y6OPzqUQvc4r+lgJ+7br+zxmZlaMgTAXkACsERtqYLx9Yvwc+2QEOHumzlFwOlGlDZEZyQ0QdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'a7509844466aa2de2f10fb88a6a18c08';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







