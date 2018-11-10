<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing ShipToType
 *
 *
 * XSD Type: ShipToType
 */
class ShipToType extends CompanyInfoType
{

    /**
     * @property string $faxNumber
     */
    private $faxNumber = null;

    /**
     * @property string $eMailAddress
     */
    private $eMailAddress = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipToAddressType $address
     */
    private $address = null;

    /**
     * @property string $locationID
     */
    private $locationID = null;

    /**
     * Gets as faxNumber
     *
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * Sets a new faxNumber
     *
     * @param string $faxNumber
     * @return self
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
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

    /**
     * Gets as address
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipToAddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipToAddressType $address
     * @return self
     */
    public function setAddress(\GoetasWebservices\Client\UPS\Ship\Data\ShipToAddressType $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as locationID
     *
     * @return string
     */
    public function getLocationID()
    {
        return $this->locationID;
    }

    /**
     * Sets a new locationID
     *
     * @param string $locationID
     * @return self
     */
    public function setLocationID($locationID)
    {
        $this->locationID = $locationID;
        return $this;
    }


}

