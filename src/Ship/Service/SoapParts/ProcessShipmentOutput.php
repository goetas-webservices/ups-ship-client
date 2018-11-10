<?php

namespace GoetasWebservices\Client\UPS\Ship\Service\SoapParts;

/**
 * Class representing ProcessShipmentOutput
 */
class ProcessShipmentOutput
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipmentResponse $body
     */
    private $body = null;

    /**
     * Gets as body
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipmentResponse
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipmentResponse $body
     * @return self
     */
    public function setBody(\GoetasWebservices\Client\UPS\Ship\Data\ShipmentResponse $body)
    {
        $this->body = $body;
        return $this;
    }


}

