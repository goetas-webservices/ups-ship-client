<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing ShipConfirmRequest
 */
class ShipConfirmRequest
{

    /**
     * @property \GoetasWebservices\Client\UPS\Common\Request $request
     */
    private $request = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipmentType $shipment
     */
    private $shipment = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\LabelSpecificationType $labelSpecification
     */
    private $labelSpecification = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ReceiptSpecificationType $receiptSpecification
     */
    private $receiptSpecification = null;

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\UPS\Common\Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\UPS\Common\Request $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\UPS\Common\Request $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as shipment
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipmentType
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipmentType $shipment
     * @return self
     */
    public function setShipment(\GoetasWebservices\Client\UPS\Ship\Data\ShipmentType $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Gets as labelSpecification
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\LabelSpecificationType
     */
    public function getLabelSpecification()
    {
        return $this->labelSpecification;
    }

    /**
     * Sets a new labelSpecification
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\LabelSpecificationType $labelSpecification
     * @return self
     */
    public function setLabelSpecification(\GoetasWebservices\Client\UPS\Ship\Data\LabelSpecificationType $labelSpecification)
    {
        $this->labelSpecification = $labelSpecification;
        return $this;
    }

    /**
     * Gets as receiptSpecification
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ReceiptSpecificationType
     */
    public function getReceiptSpecification()
    {
        return $this->receiptSpecification;
    }

    /**
     * Sets a new receiptSpecification
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ReceiptSpecificationType $receiptSpecification
     * @return self
     */
    public function setReceiptSpecification(\GoetasWebservices\Client\UPS\Ship\Data\ReceiptSpecificationType $receiptSpecification)
    {
        $this->receiptSpecification = $receiptSpecification;
        return $this;
    }


}

