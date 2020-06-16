<?php


namespace ElePHPant\Quotation\Currencies;

use \ElePHPant\Quotation\Quotation;

class CanadianDollar extends Quotation
{
    public function __construct(string $formatResponse = self::RESPONSE_JSON)
    {
        parent::__construct(self::CURRENCY_CANADIAN_DOLAR, $formatResponse);
    }

}