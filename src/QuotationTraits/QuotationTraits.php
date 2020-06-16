<?php
namespace ElePHPant\Quotation\QuotationTraits;

use ElePHPant\Quotation\Quotation;

/**
 * Trait QuotationTraits
 * User: Sérgio Danilo Jr ( @sergiodanilojr )
 * Date: 15/06/2020
 * Time: 18:52
 */
trait QuotationTraits
{
    /**
     * @var
     */
    private $data;
    /**
     * @var string
     */
    private $base;
    /**
     * @var string|null
     */
    private $format;

    /**
     * @var
     */
    protected $date;
    /**
     * @var
     */
    protected $endpoint;
    /**
     * @var string
     */
    protected $currency;


    /**
     * @return mixed|null
     */
    private function connect()
    {
        $url = $this->base . $this->endpoint;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if (!$this->codeResponse($httpcode)) {
            return null;
        }

        return $this->setResponse($result);
    }

    /**
     * @param $result
     * @return mixed
     */
    private function setResponse($result)
    {
        if ($this->format == Quotation::RESPONSE_XML) {
            return $result;
        }

        return json_decode($result);
    }

    /**
     * @param $httpcode
     * @return bool
     */
    private function codeResponse($httpcode): bool
    {
        if ($httpcode != 200) {
            return false;
        }

        return true;
    }

    /**
     * @param string $formatResponse
     * @return string
     */
    private function setFormat(string $formatResponse): string
    {
        return ($formatResponse == Quotation::RESPONSE_JSON ? Quotation::RESPONSE_JSON : Quotation::RESPONSE_XML);
    }
}