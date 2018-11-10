<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing ReceiptSpecificationType
 *
 *
 * XSD Type: ReceiptSpecificationType
 */
class ReceiptSpecificationType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ReceiptImageFormatType $imageFormat
     */
    private $imageFormat = null;

    /**
     * Gets as imageFormat
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ReceiptImageFormatType
     */
    public function getImageFormat()
    {
        return $this->imageFormat;
    }

    /**
     * Sets a new imageFormat
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ReceiptImageFormatType $imageFormat
     * @return self
     */
    public function setImageFormat(\GoetasWebservices\Client\UPS\Ship\Data\ReceiptImageFormatType $imageFormat)
    {
        $this->imageFormat = $imageFormat;
        return $this;
    }


}

