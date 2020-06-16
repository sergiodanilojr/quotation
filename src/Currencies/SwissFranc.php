<?php


namespace ElePHPant\Quotation\Currencies;

use \ElePHPant\Quotation\Quotation;

/**
 * Class SwissFranc
 * @package ElePHPant\Quotation\Currencies
 */
class SwissFranc extends Quotation
{
    /**
     * SwissFranc constructor.
     * @param string $formatResponse
     */
    public function __construct(string $formatResponse = self::RESPONSE_JSON)
    {
        parent::__construct(self::CURRENCY_SWISS_FRANC, $formatResponse);
    }
}