<?php

namespace GoetasWebservices\Client\UPS\Ship\Service\SoapEnvelope\Messages;

/**
 * Class representing ProcessShipAcceptOutput
 */
class ProcessShipAcceptOutput
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Service\SoapParts\ProcessShipAcceptOutput $body
     */
    private $body = null;

    /**
     * @property \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Service\SoapParts\ProcessShipAcceptOutput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Service\SoapParts\ProcessShipAcceptOutput $body
     * @return self
     */
    public function setBody(\GoetasWebservices\Client\UPS\Ship\Service\SoapParts\ProcessShipAcceptOutput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header
     * @return self
     */
    public function setHeader(\GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header)
    {
        $this->header = $header;
        return $this;
    }


}
