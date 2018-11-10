<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing PSONotificationType
 *
 *
 * XSD Type: PSONotificationType
 */
class PSONotificationType
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


}

