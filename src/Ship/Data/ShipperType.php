<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing ShipperType
 *
 *
 * XSD Type: ShipperType
 */
class ShipperType extends CompanyInfoType
{

    /**
     * @property string $shipperNumber
     */
    private $shipperNumber = null;

    /**
     * @property string $faxNumber
     */
    private $faxNumber = null;

    /**
     * @property string $eMailAddress
     */
    private $eMailAddress = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipAddressType $address
     */
    private $address = null;

    /**
     * Gets as shipperNumber
     *
     * @return string
     */
    public function getShipperNumber()
    {
        return $this->shipperNumber;
    }

    /**
     * Sets a new shipperNumber
     *
     * @param string $shipperNumber
     * @return self
     */
    public function setShipperNumber($shipperNumber)
    {
        $this->shipperNumber = $shipperNumber;
        return $this;
    }

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
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipAddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipAddressType $address
     * @return self
     */
    public function setAddress(\GoetasWebservices\Client\UPS\Ship\Data\ShipAddressType $address)
    {
        $this->address = $address;
        return $this;
    }


}

