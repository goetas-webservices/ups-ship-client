<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing ForwardAgentType
 *
 *
 * XSD Type: ForwardAgentType
 */
class ForwardAgentType
{

    /**
     * @property string $companyName
     */
    private $companyName = null;

    /**
     * @property string $taxIdentificationNumber
     */
    private $taxIdentificationNumber = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\AddressType $address
     */
    private $address = null;

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
     * Gets as taxIdentificationNumber
     *
     * @return string
     */
    public function getTaxIdentificationNumber()
    {
        return $this->taxIdentificationNumber;
    }

    /**
     * Sets a new taxIdentificationNumber
     *
     * @param string $taxIdentificationNumber
     * @return self
     */
    public function setTaxIdentificationNumber($taxIdentificationNumber)
    {
        $this->taxIdentificationNumber = $taxIdentificationNumber;
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


}

