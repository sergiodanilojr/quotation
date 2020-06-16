<?php
require __DIR__ . "/../vendor/autoload.php";

use \ElePHPant\Quotation\Quotation;
use \ElePHPant\Quotation\Generic;
use \ElePHPant\Quotation\Currencies\USDollar;

$dollar = (new USDollar(Quotation::RESPONSE_JSON));

var_dump([
    "DOLLAR_TODAY" => $dollar->today(),
    "DOLLAR_IN_PERIOD"=>$dollar->period(7),
    "DOLLAR_IN_INTERVAL"=>$dollar->interval(new DateTime("2020-01-05"), new DateTime("now"))
]);


//Fetch Status from several Currencies in same Time
$generic = (new Generic([
    Quotation::CURRENCY_RIPPLE,
    Quotation::CURRENCY_BITCOIN,
    Quotation::CURRENCY_SWISS_FRANC
]))->quote();

var_dump($generic);
?>