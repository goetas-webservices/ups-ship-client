<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing AlternateDeliveryAddressType
 *
 *
 * XSD Type: AlternateDeliveryAddressType
 */
class AlternateDeliveryAddressType
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
     * @property string $uPSAccessPointID
     */
    private $uPSAccessPointID = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ADLAddressType $address
     */
    private $address = null;

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
     * Gets as uPSAccessPointID
     *
     * @return string
     */
    public function getUPSAccessPointID()
    {
        return $this->uPSAccessPointID;
    }

    /**
     * Sets a new uPSAccessPointID
     *
     * @param string $uPSAccessPointID
     * @return self
     */
    public function setUPSAccessPointID($uPSAccessPointID)
    {
        $this->uPSAccessPointID = $uPSAccessPointID;
        return $this;
    }

    /**
     * Gets as address
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ADLAddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ADLAddressType $address
     * @return self
     */
    public function setAddress(\GoetasWebservices\Client\UPS\Ship\Data\ADLAddressType $address)
    {
        $this->address = $address;
        return $this;
    }


}

