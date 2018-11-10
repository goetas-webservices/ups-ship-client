<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing ShipmentServiceOptionsNotificationVoiceMessageType
 *
 *
 * XSD Type: ShipmentServiceOptionsNotificationVoiceMessageType
 */
class ShipmentServiceOptionsNotificationVoiceMessageType
{

    /**
     * @property string $phoneNumber
     */
    private $phoneNumber = null;

    /**
     * Gets as phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Sets a new phoneNumber
     *
     * @param string $phoneNumber
     * @return self
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }


}

