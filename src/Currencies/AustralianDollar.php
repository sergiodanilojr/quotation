<?php


namespace ElePHPant\Quotation\Currencies;

use \ElePHPant\Quotation\Quotation;

class AustralianDollar extends Quotation
{
    public function __construct(string $formatResponse = self::RESPONSE_JSON)
    {
        parent::__construct(self::CURRENCY_AUSTRALIAN_DOLAR, $formatResponse);
    }
}