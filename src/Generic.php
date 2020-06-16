<?php


namespace ElePHPant\Quotation;


use ElePHPant\Quotation\Quotation;
use ElePHPant\Quotation\QuotationTraits\QuotationTraits;

/**
 * Class Generic
 * User: Sérgio Danilo Jr ( @sergiodanilojr )
 * Date: 15/06/2020
 * Time: 18:52
 */
class Generic
{
    use QuotationTraits;

    /**
     * Generic constructor.
     * @param array $currencies
     * @param string $formatResponse
     */
    public function __construct(array $currencies, $formatResponse = Quotation::RESPONSE_JSON)
    {
        $this->currency = $this->bindCurrencies($currencies);
        $this->format = $this->setFormat($formatResponse);
        $this->base = "https://economia.awesomeapi.com.br/{$this->format}/";
    }

    /**
     * @return mixed|null
     */
    public function quote()
    {
        $this->endpoint = "all/{$this->currency}";
        return $this->connect();
    }

    /**
     * @param array $currencies
     * @return string
     */
    private function bindCurrencies(array $currencies): string
    {
        if (count($currencies) < 2) {
            throw new \Error("This method need a array bigger that 1. Provide one more Currency");
        }

        return implode(",", $currencies);
    }
}