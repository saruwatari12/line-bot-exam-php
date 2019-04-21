<?php



require "vendor/autoload.php";

$access_token = 'Q98ime8dRppUOSH18xZc9cR/OLBLqNZpw8w5HmkNJTemXBUZ1e32GAofW/V7wc2UWf/1f1E8gD6RTIhxs5nNvdtCz+nisNdKyjVCOTx/6wbMzIngnzPDWCaC21fhLSuY8Wtle012PlVZoCBAMI2lsgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '69d788c50c6ba739c01114ba429ed672';

$pushID = 'U350187866893a58ad26bec9fc96fcce9';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('https://soundcloud.com/phuwanai-sipalat/maru-theme-song-original-official');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







