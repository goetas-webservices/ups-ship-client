<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing PackageServiceOptionsAccessPointCODType
 *
 *
 * XSD Type: PackageServiceOptionsAccessPointCODType
 */
class PackageServiceOptionsAccessPointCODType
{

    /**
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @property string $monetaryValue
     */
    private $monetaryValue = null;

    /**
     * Gets as currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as monetaryValue
     *
     * @return string
     */
    public function getMonetaryValue()
    {
        return $this->monetaryValue;
    }

    /**
     * Sets a new monetaryValue
     *
     * @param string $monetaryValue
     * @return self
     */
    public function setMonetaryValue($monetaryValue)
    {
        $this->monetaryValue = $monetaryValue;
        return $this;
    }


}

