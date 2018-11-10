<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing PackageDeclaredValueType
 *
 *
 * XSD Type: PackageDeclaredValueType
 */
class PackageDeclaredValueType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\DeclaredValueType $type
     */
    private $type = null;

    /**
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @property string $monetaryValue
     */
    private $monetaryValue = null;

    /**
     * Gets as type
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\DeclaredValueType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\DeclaredValueType $type
     * @return self
     */
    public function setType(\GoetasWebservices\Client\UPS\Ship\Data\DeclaredValueType $type)
    {
        $this->type = $type;
        return $this;
    }

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

