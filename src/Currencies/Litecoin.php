<?php


namespace ElePHPant\Quotation\Currencies;

use \ElePHPant\Quotation\Quotation;

/**
 * Class Litecoin
 * @package ElePHPant\Quotation\Currencies
 */
class Litecoin extends Quotation
{
    /**
     * Litecoin constructor.
     * @param string $formatResponse
     */
    public function __construct(string $formatResponse = self::RESPONSE_JSON)
    {
        parent::__construct(self::CURRENCY_LITECOIN, $formatResponse);
    }
}