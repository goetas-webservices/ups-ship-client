<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing PaymentInfoType
 *
 *
 * XSD Type: PaymentInfoType
 */
class PaymentInfoType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipmentChargeType[] $shipmentCharge
     */
    private $shipmentCharge = [
        
    ];

    /**
     * @property string $splitDutyVATIndicator
     */
    private $splitDutyVATIndicator = null;

    /**
     * Adds as shipmentCharge
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipmentChargeType $shipmentCharge
     */
    public function addToShipmentCharge(\GoetasWebservices\Client\UPS\Ship\Data\ShipmentChargeType $shipmentCharge)
    {
        $this->shipmentCharge[] = $shipmentCharge;
        return $this;
    }

    /**
     * isset shipmentCharge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentCharge($index)
    {
        return isset($this->shipmentCharge[$index]);
    }

    /**
     * unset shipmentCharge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentCharge($index)
    {
        unset($this->shipmentCharge[$index]);
    }

    /**
     * Gets as shipmentCharge
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipmentChargeType[]
     */
    public function getShipmentCharge()
    {
        return $this->shipmentCharge;
    }

    /**
     * Sets a new shipmentCharge
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipmentChargeType[] $shipmentCharge
     * @return self
     */
    public function setShipmentCharge(array $shipmentCharge)
    {
        $this->shipmentCharge = $shipmentCharge;
        return $this;
    }

    /**
     * Gets as splitDutyVATIndicator
     *
     * @return string
     */
    public function getSplitDutyVATIndicator()
    {
        return $this->splitDutyVATIndicator;
    }

    /**
     * Sets a new splitDutyVATIndicator
     *
     * @param string $splitDutyVATIndicator
     * @return self
     */
    public function setSplitDutyVATIndicator($splitDutyVATIndicator)
    {
        $this->splitDutyVATIndicator = $splitDutyVATIndicator;
        return $this;
    }


}

