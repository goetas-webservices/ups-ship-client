<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing ContactInfoType
 *
 *
 * XSD Type: ContactInfoType
 */
class ContactInfoType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipPhoneType $phone
     */
    private $phone = null;

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
     * Gets as phone
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipPhoneType
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipPhoneType $phone
     * @return self
     */
    public function setPhone(\GoetasWebservices\Client\UPS\Ship\Data\ShipPhoneType $phone)
    {
        $this->phone = $phone;
        return $this;
    }


}

