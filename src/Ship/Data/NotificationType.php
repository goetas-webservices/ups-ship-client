<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing NotificationType
 *
 *
 * XSD Type: NotificationType
 */
class NotificationType
{

    /**
     * @property string $notificationCode
     */
    private $notificationCode = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\EmailDetailsType $eMail
     */
    private $eMail = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipmentServiceOptionsNotificationVoiceMessageType $voiceMessage
     */
    private $voiceMessage = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipmentServiceOptionsNotificationTextMessageType $textMessage
     */
    private $textMessage = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\LocaleType $locale
     */
    private $locale = null;

    /**
     * Gets as notificationCode
     *
     * @return string
     */
    public function getNotificationCode()
    {
        return $this->notificationCode;
    }

    /**
     * Sets a new notificationCode
     *
     * @param string $notificationCode
     * @return self
     */
    public function setNotificationCode($notificationCode)
    {
        $this->notificationCode = $notificationCode;
        return $this;
    }

    /**
     * Gets as eMail
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\EmailDetailsType
     */
    public function getEMail()
    {
        return $this->eMail;
    }

    /**
     * Sets a new eMail
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\EmailDetailsType $eMail
     * @return self
     */
    public function setEMail(\GoetasWebservices\Client\UPS\Ship\Data\EmailDetailsType $eMail)
    {
        $this->eMail = $eMail;
        return $this;
    }

    /**
     * Gets as voiceMessage
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipmentServiceOptionsNotificationVoiceMessageType
     */
    public function getVoiceMessage()
    {
        return $this->voiceMessage;
    }

    /**
     * Sets a new voiceMessage
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipmentServiceOptionsNotificationVoiceMessageType $voiceMessage
     * @return self
     */
    public function setVoiceMessage(\GoetasWebservices\Client\UPS\Ship\Data\ShipmentServiceOptionsNotificationVoiceMessageType $voiceMessage)
    {
        $this->voiceMessage = $voiceMessage;
        return $this;
    }

    /**
     * Gets as textMessage
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipmentServiceOptionsNotificationTextMessageType
     */
    public function getTextMessage()
    {
        return $this->textMessage;
    }

    /**
     * Sets a new textMessage
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipmentServiceOptionsNotificationTextMessageType $textMessage
     * @return self
     */
    public function setTextMessage(\GoetasWebservices\Client\UPS\Ship\Data\ShipmentServiceOptionsNotificationTextMessageType $textMessage)
    {
        $this->textMessage = $textMessage;
        return $this;
    }

    /**
     * Gets as locale
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\LocaleType
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Sets a new locale
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\LocaleType $locale
     * @return self
     */
    public function setLocale(\GoetasWebservices\Client\UPS\Ship\Data\LocaleType $locale)
    {
        $this->locale = $locale;
        return $this;
    }


}

