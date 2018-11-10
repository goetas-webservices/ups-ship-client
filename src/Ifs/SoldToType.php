<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing SoldToType
 *
 *
 * XSD Type: SoldToType
 */
class SoldToType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $attentionName
     */
    private $attentionName = null;

    /**
     * @property string $taxIdentificationNumber
     */
    private $taxIdentificationNumber = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\PhoneType $phone
     */
    private $phone = null;

    /**
     * @property string $option
     */
    private $option = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\AddressType $address
     */
    private $address = null;

    /**
     * @property string $eMailAddress
     */
    private $eMailAddress = null;

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as attentionName
     *
     * @return string
     */
    public function getAttentionName()
    {
        return $this->attentionName;
    }

    /**
     * Sets a new attentionName
     *
     * @param string $attentionName
     * @return self
     */
    public function setAttentionName($attentionName)
    {
        $this->attentionName = $attentionName;
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
     * Gets as phone
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\PhoneType
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\PhoneType $phone
     * @return self
     */
    public function setPhone(\GoetasWebservices\Client\UPS\Ifs\PhoneType $phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Gets as option
     *
     * @return string
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * Sets a new option
     *
     * @param string $option
     * @return self
     */
    public function setOption($option)
    {
        $this->option = $option;
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
     * Gets as eMailAddress
     *
     * @return string
     */
    public function getEMailAddress()
    {
        return $this->eMailAddress;
    }

    /**
     * Sets a new eMailAddress
     *
     * @param string $eMailAddress
     * @return self
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->eMailAddress = $eMailAddress;
        return $this;
    }


}

