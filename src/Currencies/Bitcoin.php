<?php


namespace ElePHPant\Quotation\Currencies;

use \ElePHPant\Quotation\Quotation;

/**
 * Class Bitcoin
 * @package ElePHPant\Quotation\Currencies
 */
class Bitcoin extends Quotation
{
    /**
     * Bitcoin constructor.
     * @param string $formatResponse
     */
    public function __construct(string $formatResponse = self::RESPONSE_JSON)
    {
        parent::__construct(self::CURRENCY_BITCOIN, $formatResponse);
    }
}