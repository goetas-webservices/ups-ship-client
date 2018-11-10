<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing ShipmentChargeType
 *
 *
 * XSD Type: ShipmentChargeType
 */
class ShipmentChargeType
{

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\BillShipperType $billShipper
     */
    private $billShipper = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\BillReceiverType $billReceiver
     */
    private $billReceiver = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\BillThirdPartyChargeType $billThirdParty
     */
    private $billThirdParty = null;

    /**
     * @property string $consigneeBilledIndicator
     */
    private $consigneeBilledIndicator = null;

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
     * Gets as billShipper
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\BillShipperType
     */
    public function getBillShipper()
    {
        return $this->billShipper;
    }

    /**
     * Sets a new billShipper
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\BillShipperType $billShipper
     * @return self
     */
    public function setBillShipper(\GoetasWebservices\Client\UPS\Ship\Data\BillShipperType $billShipper)
    {
        $this->billShipper = $billShipper;
        return $this;
    }

    /**
     * Gets as billReceiver
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\BillReceiverType
     */
    public function getBillReceiver()
    {
        return $this->billReceiver;
    }

    /**
     * Sets a new billReceiver
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\BillReceiverType $billReceiver
     * @return self
     */
    public function setBillReceiver(\GoetasWebservices\Client\UPS\Ship\Data\BillReceiverType $billReceiver)
    {
        $this->billReceiver = $billReceiver;
        return $this;
    }

    /**
     * Gets as billThirdParty
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\BillThirdPartyChargeType
     */
    public function getBillThirdParty()
    {
        return $this->billThirdParty;
    }

    /**
     * Sets a new billThirdParty
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\BillThirdPartyChargeType $billThirdParty
     * @return self
     */
    public function setBillThirdParty(\GoetasWebservices\Client\UPS\Ship\Data\BillThirdPartyChargeType $billThirdParty)
    {
        $this->billThirdParty = $billThirdParty;
        return $this;
    }

    /**
     * Gets as consigneeBilledIndicator
     *
     * @return string
     */
    public function getConsigneeBilledIndicator()
    {
        return $this->consigneeBilledIndicator;
    }

    /**
     * Sets a new consigneeBilledIndicator
     *
     * @param string $consigneeBilledIndicator
     * @return self
     */
    public function setConsigneeBilledIndicator($consigneeBilledIndicator)
    {
        $this->consigneeBilledIndicator = $consigneeBilledIndicator;
        return $this;
    }


}

