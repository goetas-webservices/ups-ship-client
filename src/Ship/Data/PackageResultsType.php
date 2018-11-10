<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing PackageResultsType
 *
 *
 * XSD Type: PackageResultsType
 */
class PackageResultsType
{

    /**
     * @property string $trackingNumber
     */
    private $trackingNumber = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $baseServiceCharge
     */
    private $baseServiceCharge = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $serviceOptionsCharges
     */
    private $serviceOptionsCharges = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\LabelType $shippingLabel
     */
    private $shippingLabel = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ReceiptType $shippingReceipt
     */
    private $shippingReceipt = null;

    /**
     * @property string $uSPSPICNumber
     */
    private $uSPSPICNumber = null;

    /**
     * @property string $cN22Number
     */
    private $cN22Number = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\AccessorialType[] $accessorial
     */
    private $accessorial = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\FormType $form
     */
    private $form = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType[] $itemizedCharges
     */
    private $itemizedCharges = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType[] $negotiatedCharges
     */
    private $negotiatedCharges = null;

    /**
     * Gets as trackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * Sets a new trackingNumber
     *
     * @param string $trackingNumber
     * @return self
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    /**
     * Gets as baseServiceCharge
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType
     */
    public function getBaseServiceCharge()
    {
        return $this->baseServiceCharge;
    }

    /**
     * Sets a new baseServiceCharge
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $baseServiceCharge
     * @return self
     */
    public function setBaseServiceCharge(\GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $baseServiceCharge)
    {
        $this->baseServiceCharge = $baseServiceCharge;
        return $this;
    }

    /**
     * Gets as serviceOptionsCharges
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType
     */
    public function getServiceOptionsCharges()
    {
        return $this->serviceOptionsCharges;
    }

    /**
     * Sets a new serviceOptionsCharges
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $serviceOptionsCharges
     * @return self
     */
    public function setServiceOptionsCharges(\GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $serviceOptionsCharges)
    {
        $this->serviceOptionsCharges = $serviceOptionsCharges;
        return $this;
    }

    /**
     * Gets as shippingLabel
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\LabelType
     */
    public function getShippingLabel()
    {
        return $this->shippingLabel;
    }

    /**
     * Sets a new shippingLabel
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\LabelType $shippingLabel
     * @return self
     */
    public function setShippingLabel(\GoetasWebservices\Client\UPS\Ship\Data\LabelType $shippingLabel)
    {
        $this->shippingLabel = $shippingLabel;
        return $this;
    }

    /**
     * Gets as shippingReceipt
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ReceiptType
     */
    public function getShippingReceipt()
    {
        return $this->shippingReceipt;
    }

    /**
     * Sets a new shippingReceipt
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ReceiptType $shippingReceipt
     * @return self
     */
    public function setShippingReceipt(\GoetasWebservices\Client\UPS\Ship\Data\ReceiptType $shippingReceipt)
    {
        $this->shippingReceipt = $shippingReceipt;
        return $this;
    }

    /**
     * Gets as uSPSPICNumber
     *
     * @return string
     */
    public function getUSPSPICNumber()
    {
        return $this->uSPSPICNumber;
    }

    /**
     * Sets a new uSPSPICNumber
     *
     * @param string $uSPSPICNumber
     * @return self
     */
    public function setUSPSPICNumber($uSPSPICNumber)
    {
        $this->uSPSPICNumber = $uSPSPICNumber;
        return $this;
    }

    /**
     * Gets as cN22Number
     *
     * @return string
     */
    public function getCN22Number()
    {
        return $this->cN22Number;
    }

    /**
     * Sets a new cN22Number
     *
     * @param string $cN22Number
     * @return self
     */
    public function setCN22Number($cN22Number)
    {
        $this->cN22Number = $cN22Number;
        return $this;
    }

    /**
     * Adds as accessorial
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ship\Data\AccessorialType $accessorial
     */
    public function addToAccessorial(\GoetasWebservices\Client\UPS\Ship\Data\AccessorialType $accessorial)
    {
        $this->accessorial[] = $accessorial;
        return $this;
    }

    /**
     * isset accessorial
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccessorial($index)
    {
        return isset($this->accessorial[$index]);
    }

    /**
     * unset accessorial
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccessorial($index)
    {
        unset($this->accessorial[$index]);
    }

    /**
     * Gets as accessorial
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\AccessorialType[]
     */
    public function getAccessorial()
    {
        return $this->accessorial;
    }

    /**
     * Sets a new accessorial
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\AccessorialType[] $accessorial
     * @return self
     */
    public function setAccessorial(array $accessorial)
    {
        $this->accessorial = $accessorial;
        return $this;
    }

    /**
     * Gets as form
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\FormType
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Sets a new form
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\FormType $form
     * @return self
     */
    public function setForm(\GoetasWebservices\Client\UPS\Ship\Data\FormType $form)
    {
        $this->form = $form;
        return $this;
    }

    /**
     * Adds as itemizedCharges
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $itemizedCharges
     */
    public function addToItemizedCharges(\GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $itemizedCharges)
    {
        $this->itemizedCharges[] = $itemizedCharges;
        return $this;
    }

    /**
     * isset itemizedCharges
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemizedCharges($index)
    {
        return isset($this->itemizedCharges[$index]);
    }

    /**
     * unset itemizedCharges
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemizedCharges($index)
    {
        unset($this->itemizedCharges[$index]);
    }

    /**
     * Gets as itemizedCharges
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType[]
     */
    public function getItemizedCharges()
    {
        return $this->itemizedCharges;
    }

    /**
     * Sets a new itemizedCharges
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType[] $itemizedCharges
     * @return self
     */
    public function setItemizedCharges(array $itemizedCharges)
    {
        $this->itemizedCharges = $itemizedCharges;
        return $this;
    }

    /**
     * Adds as itemizedCharges
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $itemizedCharges
     */
    public function addToNegotiatedCharges(\GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $itemizedCharges)
    {
        $this->negotiatedCharges[] = $itemizedCharges;
        return $this;
    }

    /**
     * isset negotiatedCharges
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNegotiatedCharges($index)
    {
        return isset($this->negotiatedCharges[$index]);
    }

    /**
     * unset negotiatedCharges
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNegotiatedCharges($index)
    {
        unset($this->negotiatedCharges[$index]);
    }

    /**
     * Gets as negotiatedCharges
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType[]
     */
    public function getNegotiatedCharges()
    {
        return $this->negotiatedCharges;
    }

    /**
     * Sets a new negotiatedCharges
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType[] $negotiatedCharges
     * @return self
     */
    public function setNegotiatedCharges(array $negotiatedCharges)
    {
        $this->negotiatedCharges = $negotiatedCharges;
        return $this;
    }


}

