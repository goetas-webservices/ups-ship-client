<?php

namespace GoetasWebservices\Client\UPS\Ship\Service\SoapParts;

/**
 * Class representing ProcessShipAcceptInput
 */
class ProcessShipAcceptInput
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipAcceptRequest $body
     */
    private $body = null;

    /**
     * Gets as body
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipAcceptRequest
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipAcceptRequest $body
     * @return self
     */
    public function setBody(\GoetasWebservices\Client\UPS\Ship\Data\ShipAcceptRequest $body)
    {
        $this->body = $body;
        return $this;
    }


}

