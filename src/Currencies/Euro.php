<?php


namespace ElePHPant\Quotation\Currencies;

use \ElePHPant\Quotation\Quotation;

/**
 * Class Euro
 * @package ElePHPant\Quotation\Currencies
 */
class Euro extends Quotation
{
    /**
     * Euro constructor.
     * @param string $formatResponse
     */
    public function __construct(string $formatResponse = self::RESPONSE_JSON)
    {
        parent::__construct(self::CURRENCY_EURO, $formatResponse);
    }
}