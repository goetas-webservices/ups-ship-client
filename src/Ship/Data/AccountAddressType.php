<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing AccountAddressType
 *
 *
 * XSD Type: AccountAddressType
 */
class AccountAddressType
{

    /**
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * @property string $countryCode
     */
    private $countryCode = null;

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

