<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing CreditCardType
 *
 *
 * XSD Type: CreditCardType
 */
class CreditCardType
{

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property string $number
     */
    private $number = null;

    /**
     * @property string $expirationDate
     */
    private $expirationDate = null;

    /**
     * @property string $securityCode
     */
    private $securityCode = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\CreditCardAddressType $address
     */
    private $address = null;

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as expirationDate
     *
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Sets a new expirationDate
     *
     * @param string $expirationDate
     * @return self
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Gets as securityCode
     *
     * @return string
     */
    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    /**
     * Sets a new securityCode
     *
     * @param string $securityCode
     * @return self
     */
    public function setSecurityCode($securityCode)
    {
        $this->securityCode = $securityCode;
        return $this;
    }

    /**
     * Gets as address
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\CreditCardAddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\CreditCardAddressType $address
     * @return self
     */
    public function setAddress(\GoetasWebservices\Client\UPS\Ship\Data\CreditCardAddressType $address)
    {
        $this->address = $address;
        return $this;
    }


}

