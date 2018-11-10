<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing ShipperFiledType
 *
 *
 * XSD Type: ShipperFiledType
 */
class ShipperFiledType
{

    /**
     * @property string $code
     */
    private $code = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property string $preDepartureITNNumber
     */
    private $preDepartureITNNumber = null;

    /**
     * @property string $exemptionLegend
     */
    private $exemptionLegend = null;

    /**
     * @property string $eEIShipmentReferenceNumber
     */
    private $eEIShipmentReferenceNumber = null;

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
     * Gets as preDepartureITNNumber
     *
     * @return string
     */
    public function getPreDepartureITNNumber()
    {
        return $this->preDepartureITNNumber;
    }

    /**
     * Sets a new preDepartureITNNumber
     *
     * @param string $preDepartureITNNumber
     * @return self
     */
    public function setPreDepartureITNNumber($preDepartureITNNumber)
    {
        $this->preDepartureITNNumber = $preDepartureITNNumber;
        return $this;
    }

    /**
     * Gets as exemptionLegend
     *
     * @return string
     */
    public function getExemptionLegend()
    {
        return $this->exemptionLegend;
    }

    /**
     * Sets a new exemptionLegend
     *
     * @param string $exemptionLegend
     * @return self
     */
    public function setExemptionLegend($exemptionLegend)
    {
        $this->exemptionLegend = $exemptionLegend;
        return $this;
    }

    /**
     * Gets as eEIShipmentReferenceNumber
     *
     * @return string
     */
    public function getEEIShipmentReferenceNumber()
    {
        return $this->eEIShipmentReferenceNumber;
    }

    /**
     * Sets a new eEIShipmentReferenceNumber
     *
     * @param string $eEIShipmentReferenceNumber
     * @return self
     */
    public function setEEIShipmentReferenceNumber($eEIShipmentReferenceNumber)
    {
        $this->eEIShipmentReferenceNumber = $eEIShipmentReferenceNumber;
        return $this;
    }


}

