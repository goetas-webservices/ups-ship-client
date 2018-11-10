<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing ShipFromType
 *
 *
 * XSD Type: ShipFromType
 */
class ShipFromType extends CompanyInfoType
{

    /**
     * @property string $faxNumber
     */
    private $faxNumber = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipAddressType $address
     */
    private $address = null;

    /**
     * @property string $eMailAddress
     */
    private $eMailAddress = null;

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

