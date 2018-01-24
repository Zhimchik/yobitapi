<?php

require '../vendor/autoload.php';
use OlegStyle\YobitApi\YobitPublicApi;

$pairs = [
    new \OlegStyle\YobitApi\Models\CurrencyPair('ltc', 'btc'),
    new \OlegStyle\YobitApi\Models\CurrencyPair('note', 'btc'),
];
$publicApi = new YobitPublicApi();

$publicApi->getInfo(); // get info about all pairs
$publicApi->getTickers($pairs); // limit - 50 pairs
$publicApi->getTicker('ltc', 'btc');
$publicApi->getDepths($pairs); // limit - 50 pairs
$publicApi->getDepth('btc', 'eth');
$publicApi->getTrades($pairs); // limit - 50 pairs
$publicApi->getTrade('ltc', 'btc');