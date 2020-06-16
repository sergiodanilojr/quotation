<?php


namespace ElePHPant\Quotation\Currencies;

use \ElePHPant\Quotation\Quotation;

/**
 * Class IsraeliShekel
 * @package ElePHPant\Quotation\Currencies
 */
class IsraeliShekel extends Quotation
{
    /**
     * IsraeliShekel constructor.
     * @param string $formatResponse
     */
    public function __construct(string $formatResponse = self::RESPONSE_JSON)
    {
        parent::__construct(self::CURRENCY_ISRAELI_SHEKEL, $formatResponse);
    }
}