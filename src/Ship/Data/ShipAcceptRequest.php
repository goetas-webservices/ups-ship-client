<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing ShipAcceptRequest
 */
class ShipAcceptRequest
{

    /**
     * @property \GoetasWebservices\Client\UPS\Common\Request $request
     */
    private $request = null;

    /**
     * @property string $shipmentDigest
     */
    private $shipmentDigest = null;

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
     * Gets as shipmentDigest
     *
     * @return string
     */
    public function getShipmentDigest()
    {
        return $this->shipmentDigest;
    }

    /**
     * Sets a new shipmentDigest
     *
     * @param string $shipmentDigest
     * @return self
     */
    public function setShipmentDigest($shipmentDigest)
    {
        $this->shipmentDigest = $shipmentDigest;
        return $this;
    }


}

