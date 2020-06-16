<?php


namespace ElePHPant\Quotation\Currencies;

use \ElePHPant\Quotation\Quotation;

/**
 * Class Etherum
 * @package ElePHPant\Quotation\Currencies
 */
class Etherum extends Quotation
{
    /**
     * Etherum constructor.
     * @param string $formatResponse
     */
    public function __construct(string $formatResponse = self::RESPONSE_JSON)
    {
        parent::__construct(self::CURRENCY_ETHEREUM, $formatResponse);
    }
}