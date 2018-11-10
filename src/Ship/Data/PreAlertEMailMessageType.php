<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing PreAlertEMailMessageType
 *
 *
 * XSD Type: PreAlertEMailMessageType
 */
class PreAlertEMailMessageType
{

    /**
     * @property string $eMailAddress
     */
    private $eMailAddress = null;

    /**
     * @property string $undeliverableEMailAddress
     */
    private $undeliverableEMailAddress = null;

    /**
     * Gets as eMailAddress
     *
     * @return string
     */
    public function getEMailAddress()
    {
        return $this->eMailAddress;
    }

    /**
     * Sets a new eMailAddress
     *
     * @param string $eMailAddress
     * @return self
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->eMailAddress = $eMailAddress;
        return $this;
    }

    /**
     * Gets as undeliverableEMailAddress
     *
     * @return string
     */
    public function getUndeliverableEMailAddress()
    {
        return $this->undeliverableEMailAddress;
    }

    /**
     * Sets a new undeliverableEMailAddress
     *
     * @param string $undeliverableEMailAddress
     * @return self
     */
    public function setUndeliverableEMailAddress($undeliverableEMailAddress)
    {
        $this->undeliverableEMailAddress = $undeliverableEMailAddress;
        return $this;
    }


}

