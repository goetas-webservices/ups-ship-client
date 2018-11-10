<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing EEIFilingOptionType
 *
 *
 * XSD Type: EEIFilingOptionType
 */
class EEIFilingOptionType
{

    /**
     * @property string $code
     */
    private $code = null;

    /**
     * @property string $eMailAddress
     */
    private $eMailAddress = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\UPSFiledType $uPSFiled
     */
    private $uPSFiled = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\ShipperFiledType $shipperFiled
     */
    private $shipperFiled = null;

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
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
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as uPSFiled
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\UPSFiledType
     */
    public function getUPSFiled()
    {
        return $this->uPSFiled;
    }

    /**
     * Sets a new uPSFiled
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\UPSFiledType $uPSFiled
     * @return self
     */
    public function setUPSFiled(\GoetasWebservices\Client\UPS\Ifs\UPSFiledType $uPSFiled)
    {
        $this->uPSFiled = $uPSFiled;
        return $this;
    }

    /**
     * Gets as shipperFiled
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\ShipperFiledType
     */
    public function getShipperFiled()
    {
        return $this->shipperFiled;
    }

    /**
     * Sets a new shipperFiled
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\ShipperFiledType $shipperFiled
     * @return self
     */
    public function setShipperFiled(\GoetasWebservices\Client\UPS\Ifs\ShipperFiledType $shipperFiled)
    {
        $this->shipperFiled = $shipperFiled;
        return $this;
    }


}

