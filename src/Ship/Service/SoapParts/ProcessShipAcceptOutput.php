<?php

namespace GoetasWebservices\Client\UPS\Ship\Service\SoapParts;

/**
 * Class representing ProcessShipAcceptOutput
 */
class ProcessShipAcceptOutput
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipAcceptResponse $body
     */
    private $body = null;

    /**
     * Gets as body
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipAcceptResponse
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipAcceptResponse $body
     * @return self
     */
    public function setBody(\GoetasWebservices\Client\UPS\Ship\Data\ShipAcceptResponse $body)
    {
        $this->body = $body;
        return $this;
    }


}

