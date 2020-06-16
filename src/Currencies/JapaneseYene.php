<?php


namespace ElePHPant\Quotation\Currencies;

use \ElePHPant\Quotation\Quotation;

class JapaneseYene extends Quotation
{
    public function __construct(string $formatResponse = self::RESPONSE_JSON)
    {
        parent::__construct(self::CURRENCY_YEN_JAPAN, $formatResponse);
    }
}