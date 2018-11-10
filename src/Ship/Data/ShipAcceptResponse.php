<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing ShipAcceptResponse
 */
class ShipAcceptResponse
{

    /**
     * @property \GoetasWebservices\Client\UPS\Common\Response $response
     */
    private $response = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipmentResultsType $shipmentResults
     */
    private $shipmentResults = null;

    /**
     * Gets as response
     *
     * @return \GoetasWebservices\Client\UPS\Common\Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * @param \GoetasWebservices\Client\UPS\Common\Response $response
     * @return self
     */
    public function setResponse(\GoetasWebservices\Client\UPS\Common\Response $response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Gets as shipmentResults
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipmentResultsType
     */
    public function getShipmentResults()
    {
        return $this->shipmentResults;
    }

    /**
     * Sets a new shipmentResults
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipmentResultsType $shipmentResults
     * @return self
     */
    public function setShipmentResults(\GoetasWebservices\Client\UPS\Ship\Data\ShipmentResultsType $shipmentResults)
    {
        $this->shipmentResults = $shipmentResults;
        return $this;
    }


}

