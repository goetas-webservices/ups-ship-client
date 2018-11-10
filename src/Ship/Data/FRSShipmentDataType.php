<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing FRSShipmentDataType
 *
 *
 * XSD Type: FRSShipmentDataType
 */
class FRSShipmentDataType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\TransportationChargeType $transportationCharges
     */
    private $transportationCharges = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\FreightDensityRateType $freightDensityRate
     */
    private $freightDensityRate = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\HandlingUnitsResponseType[] $handlingUnits
     */
    private $handlingUnits = [
        
    ];

    /**
     * Gets as transportationCharges
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\TransportationChargeType
     */
    public function getTransportationCharges()
    {
        return $this->transportationCharges;
    }

    /**
     * Sets a new transportationCharges
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\TransportationChargeType $transportationCharges
     * @return self
     */
    public function setTransportationCharges(\GoetasWebservices\Client\UPS\Ship\Data\TransportationChargeType $transportationCharges)
    {
        $this->transportationCharges = $transportationCharges;
        return $this;
    }

    /**
     * Gets as freightDensityRate
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\FreightDensityRateType
     */
    public function getFreightDensityRate()
    {
        return $this->freightDensityRate;
    }

    /**
     * Sets a new freightDensityRate
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\FreightDensityRateType $freightDensityRate
     * @return self
     */
    public function setFreightDensityRate(\GoetasWebservices\Client\UPS\Ship\Data\FreightDensityRateType $freightDensityRate)
    {
        $this->freightDensityRate = $freightDensityRate;
        return $this;
    }

    /**
     * Adds as handlingUnits
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ship\Data\HandlingUnitsResponseType $handlingUnits
     */
    public function addToHandlingUnits(\GoetasWebservices\Client\UPS\Ship\Data\HandlingUnitsResponseType $handlingUnits)
    {
        $this->handlingUnits[] = $handlingUnits;
        return $this;
    }

    /**
     * isset handlingUnits
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandlingUnits($index)
    {
        return isset($this->handlingUnits[$index]);
    }

    /**
     * unset handlingUnits
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandlingUnits($index)
    {
        unset($this->handlingUnits[$index]);
    }

    /**
     * Gets as handlingUnits
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\HandlingUnitsResponseType[]
     */
    public function getHandlingUnits()
    {
        return $this->handlingUnits;
    }

    /**
     * Sets a new handlingUnits
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\HandlingUnitsResponseType[] $handlingUnits
     * @return self
     */
    public function setHandlingUnits(array $handlingUnits)
    {
        $this->handlingUnits = $handlingUnits;
        return $this;
    }


}

