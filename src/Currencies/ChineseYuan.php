<?php


namespace ElePHPant\Quotation\Currencies;

use \ElePHPant\Quotation\Quotation;

/**
 * Class ChineseYuan
 * @package ElePHPant\Quotation\Currencies
 */
class ChineseYuan extends Quotation
{
    /**
     * ChineseYuan constructor.
     * @param string $formatResponse
     */
    public function __construct(string $formatResponse = self::RESPONSE_JSON)
    {
        parent::__construct(self::CURRENCY_CHINESE_YUAN, $formatResponse);
    }
}