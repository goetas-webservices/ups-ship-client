<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing UltimateConsigneeType
 *
 *
 * XSD Type: UltimateConsigneeType
 */
class UltimateConsigneeType
{

    /**
     * @property string $companyName
     */
    private $companyName = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\AddressType $address
     */
    private $address = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\UltimateConsigneeTypeType $ultimateConsigneeType
     */
    private $ultimateConsigneeType = null;

    /**
     * Gets as companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * @param string $companyName
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Gets as address
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\AddressType $address
     * @return self
     */
    public function setAddress(\GoetasWebservices\Client\UPS\Ifs\AddressType $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as ultimateConsigneeType
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\UltimateConsigneeTypeType
     */
    public function getUltimateConsigneeType()
    {
        return $this->ultimateConsigneeType;
    }

    /**
     * Sets a new ultimateConsigneeType
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\UltimateConsigneeTypeType $ultimateConsigneeType
     * @return self
     */
    public function setUltimateConsigneeType(\GoetasWebservices\Client\UPS\Ifs\UltimateConsigneeTypeType $ultimateConsigneeType)
    {
        $this->ultimateConsigneeType = $ultimateConsigneeType;
        return $this;
    }


}

