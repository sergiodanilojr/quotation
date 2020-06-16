<?php


namespace ElePHPant\Quotation\Currencies;

use \ElePHPant\Quotation\Quotation;

/**
 * Class Ripple
 * @package ElePHPant\Quotation\Currencies
 */
class Ripple extends Quotation
{
    /**
     * Ripple constructor.
     * @param string $formatResponse
     */
    public function __construct(string $formatResponse = self::RESPONSE_JSON)
    {
        parent::__construct(self::CURRENCY_RIPPLE, $formatResponse);
    }
}