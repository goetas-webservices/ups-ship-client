<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing CreditCardAddressType
 *
 *
 * XSD Type: CreditCardAddressType
 */
class CreditCardAddressType
{

    /**
     * @property string[] $addressLine
     */
    private $addressLine = [
        
    ];

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * @property string $stateProvinceCode
     */
    private $stateProvinceCode = null;

    /**
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * Adds as addressLine
     *
     * @return self
     * @param string $addressLine
     */
    public function addToAddressLine($addressLine)
    {
        $this->addressLine[] = $addressLine;
        return $this;
    }

    /**
     * isset addressLine
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressLine($index)
    {
        return isset($this->addressLine[$index]);
    }

    /**
     * unset addressLine
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressLine($index)
    {
        unset($this->addressLine[$index]);
    }

    /**
     * Gets as addressLine
     *
     * @return string[]
     */
    public function getAddressLine()
    {
        return $this->addressLine;
    }

    /**
     * Sets a new addressLine
     *
     * @param string[] $addressLine
     * @return self
     */
    public function setAddressLine(array $addressLine)
    {
        $this->addressLine = $addressLine;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as stateProvinceCode
     *
     * @return string
     */
    public function getStateProvinceCode()
    {
        return $this->stateProvinceCode;
    }

    /**
     * Sets a new stateProvinceCode
     *
     * @param string $stateProvinceCode
     * @return self
     */
    public function setStateProvinceCode($stateProvinceCode)
    {
        $this->stateProvinceCode = $stateProvinceCode;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }


}

