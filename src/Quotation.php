<?php

namespace ElePHPant\Quotation;

use ElePHPant\Quotation\QuotationTraits\QuotationTraits;

/**
 * Class Quotation
 * User: Sérgio Danilo Jr ( @sergiodanilojr )
 * Date: 15/06/2020
 * Time: 18:52
 */
abstract class Quotation
{

    /**
     * JSON RESPONSE FORMAT
     */
    const RESPONSE_JSON = "json";
    /**
     * XML RESPONSE FORMAT
     */
    const RESPONSE_XML = "xml";


    /**
     * ALL CURRENCIES SUPPORTED
     */
    const CURRENCY_DOLAR = "USD-BRL";

    const CURRENCY_DOLAR_TOURISM = "USDT-BRL";

    const CURRENCY_EURO = "EUR-BRL";

    const CURRENCY_CANADIAN_DOLAR = "CAD-BRL";

    const CURRENCY_AUSTRALIAN_DOLAR = "AUD-BRL";

    const CURRENCY_STERLING = "GBP-BRL";

    const CURRENCY_ARGENTINIAN_PESO = "ARS-BRL";

    const CURRENCY_YEN_JAPAN = "JPY-BRL";

    const CURRENCY_SWISS_FRANC = "CHF-BRL";

    const CURRENCY_CHINESE_YUAN = "CNY-BRL";

    const CURRENCY_ISRAELI_SHEKEL = "YLS-BRL";

    const CURRENCY_BITCOIN = "BTC-BRL";

    const CURRENCY_LITECOIN = "LTC-BRL";

    const CURRENCY_ETHEREUM = "ETH-BRL";

    const CURRENCY_RIPPLE = "XRP-BRL";

    use QuotationTraits;

    /**
     * Cotation constructor.
     * @param string $currency
     * @param string $formatResponse
     */
    public function __construct(string $currency, string $formatResponse = self::RESPONSE_JSON)
    {
        $this->currency = $currency;
        $this->format = $this->setFormat($formatResponse);
        $this->base = "https://economia.awesomeapi.com.br/{$this->format}/";
    }


    /**
     * @return mixed|null
     */
    public function today()
    {
        $this->endpoint = "all/{$this->currency}";
        return $this->connect();
    }


    /**
     * @param int $days
     * @return mixed|null
     */
    public function period(int $days)
    {
        $this->endpoint = "{$this->currency}/{$days}";
        return $this->connect();
    }


    /**
     * @param DateTime $start
     * @param DateTime $end
     * @return mixed|null
     */
    public function interval(\DateTime $start, \DateTime $end)
    {
        $start = $start->format("Ymd");
        $end = $end->format("Ymd");
        $this->endpoint = "daily/{$this->currency}/?start_date={$start}&end_date={$end}";

        return $this->connect();
    }

}