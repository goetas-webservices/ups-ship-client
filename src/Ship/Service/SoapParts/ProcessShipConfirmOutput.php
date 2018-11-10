<?php

namespace GoetasWebservices\Client\UPS\Ship\Service\SoapParts;

/**
 * Class representing ProcessShipConfirmOutput
 */
class ProcessShipConfirmOutput
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipConfirmResponse $body
     */
    private $body = null;

    /**
     * Gets as body
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipConfirmResponse
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipConfirmResponse $body
     * @return self
     */
    public function setBody(\GoetasWebservices\Client\UPS\Ship\Data\ShipConfirmResponse $body)
    {
        $this->body = $body;
        return $this;
    }


}

