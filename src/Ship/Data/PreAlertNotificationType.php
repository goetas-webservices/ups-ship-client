<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing PreAlertNotificationType
 *
 *
 * XSD Type: PreAlertNotificationType
 */
class PreAlertNotificationType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\PreAlertEMailMessageType $eMailMessage
     */
    private $eMailMessage = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\PreAlertVoiceMessageType $voiceMessage
     */
    private $voiceMessage = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\PreAlertTextMessageType $textMessage
     */
    private $textMessage = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\LocaleType $locale
     */
    private $locale = null;

    /**
     * Gets as eMailMessage
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\PreAlertEMailMessageType
     */
    public function getEMailMessage()
    {
        return $this->eMailMessage;
    }

    /**
     * Sets a new eMailMessage
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\PreAlertEMailMessageType $eMailMessage
     * @return self
     */
    public function setEMailMessage(\GoetasWebservices\Client\UPS\Ship\Data\PreAlertEMailMessageType $eMailMessage)
    {
        $this->eMailMessage = $eMailMessage;
        return $this;
    }

    /**
     * Gets as voiceMessage
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\PreAlertVoiceMessageType
     */
    public function getVoiceMessage()
    {
        return $this->voiceMessage;
    }

    /**
     * Sets a new voiceMessage
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\PreAlertVoiceMessageType $voiceMessage
     * @return self
     */
    public function setVoiceMessage(\GoetasWebservices\Client\UPS\Ship\Data\PreAlertVoiceMessageType $voiceMessage)
    {
        $this->voiceMessage = $voiceMessage;
        return $this;
    }

    /**
     * Gets as textMessage
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\PreAlertTextMessageType
     */
    public function getTextMessage()
    {
        return $this->textMessage;
    }

    /**
     * Sets a new textMessage
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\PreAlertTextMessageType $textMessage
     * @return self
     */
    public function setTextMessage(\GoetasWebservices\Client\UPS\Ship\Data\PreAlertTextMessageType $textMessage)
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

