<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing CN22ContentType
 *
 *
 * XSD Type: CN22ContentType
 */
class CN22ContentType
{

    /**
     * @property string $cN22ContentQuantity
     */
    private $cN22ContentQuantity = null;

    /**
     * @property string $cN22ContentDescription
     */
    private $cN22ContentDescription = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\ProductWeightType $cN22ContentWeight
     */
    private $cN22ContentWeight = null;

    /**
     * @property string $cN22ContentTotalValue
     */
    private $cN22ContentTotalValue = null;

    /**
     * @property string $cN22ContentCurrencyCode
     */
    private $cN22ContentCurrencyCode = null;

    /**
     * @property string $cN22ContentCountryOfOrigin
     */
    private $cN22ContentCountryOfOrigin = null;

    /**
     * @property string $cN22ContentTariffNumber
     */
    private $cN22ContentTariffNumber = null;

    /**
     * Gets as cN22ContentQuantity
     *
     * @return string
     */
    public function getCN22ContentQuantity()
    {
        return $this->cN22ContentQuantity;
    }

    /**
     * Sets a new cN22ContentQuantity
     *
     * @param string $cN22ContentQuantity
     * @return self
     */
    public function setCN22ContentQuantity($cN22ContentQuantity)
    {
        $this->cN22ContentQuantity = $cN22ContentQuantity;
        return $this;
    }

    /**
     * Gets as cN22ContentDescription
     *
     * @return string
     */
    public function getCN22ContentDescription()
    {
        return $this->cN22ContentDescription;
    }

    /**
     * Sets a new cN22ContentDescription
     *
     * @param string $cN22ContentDescription
     * @return self
     */
    public function setCN22ContentDescription($cN22ContentDescription)
    {
        $this->cN22ContentDescription = $cN22ContentDescription;
        return $this;
    }

    /**
     * Gets as cN22ContentWeight
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\ProductWeightType
     */
    public function getCN22ContentWeight()
    {
        return $this->cN22ContentWeight;
    }

    /**
     * Sets a new cN22ContentWeight
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\ProductWeightType $cN22ContentWeight
     * @return self
     */
    public function setCN22ContentWeight(\GoetasWebservices\Client\UPS\Ifs\ProductWeightType $cN22ContentWeight)
    {
        $this->cN22ContentWeight = $cN22ContentWeight;
        return $this;
    }

    /**
     * Gets as cN22ContentTotalValue
     *
     * @return string
     */
    public function getCN22ContentTotalValue()
    {
        return $this->cN22ContentTotalValue;
    }

    /**
     * Sets a new cN22ContentTotalValue
     *
     * @param string $cN22ContentTotalValue
     * @return self
     */
    public function setCN22ContentTotalValue($cN22ContentTotalValue)
    {
        $this->cN22ContentTotalValue = $cN22ContentTotalValue;
        return $this;
    }

    /**
     * Gets as cN22ContentCurrencyCode
     *
     * @return string
     */
    public function getCN22ContentCurrencyCode()
    {
        return $this->cN22ContentCurrencyCode;
    }

    /**
     * Sets a new cN22ContentCurrencyCode
     *
     * @param string $cN22ContentCurrencyCode
     * @return self
     */
    public function setCN22ContentCurrencyCode($cN22ContentCurrencyCode)
    {
        $this->cN22ContentCurrencyCode = $cN22ContentCurrencyCode;
        return $this;
    }

    /**
     * Gets as cN22ContentCountryOfOrigin
     *
     * @return string
     */
    public function getCN22ContentCountryOfOrigin()
    {
        return $this->cN22ContentCountryOfOrigin;
    }

    /**
     * Sets a new cN22ContentCountryOfOrigin
     *
     * @param string $cN22ContentCountryOfOrigin
     * @return self
     */
    public function setCN22ContentCountryOfOrigin($cN22ContentCountryOfOrigin)
    {
        $this->cN22ContentCountryOfOrigin = $cN22ContentCountryOfOrigin;
        return $this;
    }

    /**
     * Gets as cN22ContentTariffNumber
     *
     * @return string
     */
    public function getCN22ContentTariffNumber()
    {
        return $this->cN22ContentTariffNumber;
    }

    /**
     * Sets a new cN22ContentTariffNumber
     *
     * @param string $cN22ContentTariffNumber
     * @return self
     */
    public function setCN22ContentTariffNumber($cN22ContentTariffNumber)
    {
        $this->cN22ContentTariffNumber = $cN22ContentTariffNumber;
        return $this;
    }


}

