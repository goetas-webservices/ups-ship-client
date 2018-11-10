<?php

namespace GoetasWebservices\Client\UPS\Ship\Service\SoapParts;

/**
 * Class representing ProcessShipConfirmInput
 */
class ProcessShipConfirmInput
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipConfirmRequest $body
     */
    private $body = null;

    /**
     * Gets as body
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipConfirmRequest
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipConfirmRequest $body
     * @return self
     */
    public function setBody(\GoetasWebservices\Client\UPS\Ship\Data\ShipConfirmRequest $body)
    {
        $this->body = $body;
        return $this;
    }


}

