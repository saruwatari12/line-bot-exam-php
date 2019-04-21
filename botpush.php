<?php
require "vendor/autoload.php";
$access_token = 'YbUrvA+/RroZlucC2pTPCrEUXh/G9KYOYPVBNT3uphU2rpBb6JbGqf9zxFEPAHoDWf/1f1E8gD6RTIhxs5nNvdtCz+nisNdKyjVCOTx/6wYD/s2Ayge3qgKj9JXGZyUMNKf3rn7bn6VRdwD9o1PT8gdB04t89/1O/w1cDnyilFU=';
$channelSecret = '69d788c50c6ba739c01114ba429ed672';
$idPush = 'U5ddf6e330c9adf387e569daf499204d2'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

