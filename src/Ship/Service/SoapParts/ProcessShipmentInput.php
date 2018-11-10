<?php

namespace GoetasWebservices\Client\UPS\Ship\Service\SoapParts;

/**
 * Class representing ProcessShipmentInput
 */
class ProcessShipmentInput
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipmentRequest $body
     */
    private $body = null;

    /**
     * Gets as body
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipmentRequest
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipmentRequest $body
     * @return self
     */
    public function setBody(\GoetasWebservices\Client\UPS\Ship\Data\ShipmentRequest $body)
    {
        $this->body = $body;
        return $this;
    }


}

