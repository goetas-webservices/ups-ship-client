<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing CODType
 *
 *
 * XSD Type: CODType
 */
class CODType
{

    /**
     * @property string $cODFundsCode
     */
    private $cODFundsCode = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\CurrencyMonetaryType $cODAmount
     */
    private $cODAmount = null;

    /**
     * Gets as cODFundsCode
     *
     * @return string
     */
    public function getCODFundsCode()
    {
        return $this->cODFundsCode;
    }

    /**
     * Sets a new cODFundsCode
     *
     * @param string $cODFundsCode
     * @return self
     */
    public function setCODFundsCode($cODFundsCode)
    {
        $this->cODFundsCode = $cODFundsCode;
        return $this;
    }

    /**
     * Gets as cODAmount
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\CurrencyMonetaryType
     */
    public function getCODAmount()
    {
        return $this->cODAmount;
    }

    /**
     * Sets a new cODAmount
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\CurrencyMonetaryType $cODAmount
     * @return self
     */
    public function setCODAmount(\GoetasWebservices\Client\UPS\Ship\Data\CurrencyMonetaryType $cODAmount)
    {
        $this->cODAmount = $cODAmount;
        return $this;
    }


}

