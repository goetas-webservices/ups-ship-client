<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing VerbalConfirmationType
 *
 *
 * XSD Type: VerbalConfirmationType
 */
class VerbalConfirmationType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ContactInfoType $contactInfo
     */
    private $contactInfo = null;

    /**
     * Gets as contactInfo
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ContactInfoType
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * Sets a new contactInfo
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ContactInfoType $contactInfo
     * @return self
     */
    public function setContactInfo(\GoetasWebservices\Client\UPS\Ship\Data\ContactInfoType $contactInfo)
    {
        $this->contactInfo = $contactInfo;
        return $this;
    }


}

