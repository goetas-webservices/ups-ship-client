<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing LabelDeliveryType
 *
 *
 * XSD Type: LabelDeliveryType
 */
class LabelDeliveryType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\EmailDetailsType $eMail
     */
    private $eMail = null;

    /**
     * @property string $labelLinksIndicator
     */
    private $labelLinksIndicator = null;

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
     * Gets as labelLinksIndicator
     *
     * @return string
     */
    public function getLabelLinksIndicator()
    {
        return $this->labelLinksIndicator;
    }

    /**
     * Sets a new labelLinksIndicator
     *
     * @param string $labelLinksIndicator
     * @return self
     */
    public function setLabelLinksIndicator($labelLinksIndicator)
    {
        $this->labelLinksIndicator = $labelLinksIndicator;
        return $this;
    }


}

