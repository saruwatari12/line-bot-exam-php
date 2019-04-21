<?php



require "vendor/autoload.php";

$access_token = '4S4TT3g+sG3wUaZuh01PTDUMsD4UhqtXRFYDHrMI3M9KUIIjuPowc2vo4TanPqtcWf/1f1E8gD6RTIhxs5nNvdtCz+nisNdKyjVCOTx/6wboPmdGviTN9oLRhaTfZqNUJnoA5L88Stu845isH/mBlAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '69d788c50c6ba739c01114ba429ed672';

$pushID = 'U5ddf6e330c9adf387e569daf499204d2';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();






