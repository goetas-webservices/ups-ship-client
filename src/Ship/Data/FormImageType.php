<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing FormImageType
 *
 *
 * XSD Type: FormImageType
 */
class FormImageType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ImageFormatType $imageFormat
     */
    private $imageFormat = null;

    /**
     * @property string $graphicImage
     */
    private $graphicImage = null;

    /**
     * Gets as imageFormat
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ImageFormatType
     */
    public function getImageFormat()
    {
        return $this->imageFormat;
    }

    /**
     * Sets a new imageFormat
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ImageFormatType $imageFormat
     * @return self
     */
    public function setImageFormat(\GoetasWebservices\Client\UPS\Ship\Data\ImageFormatType $imageFormat)
    {
        $this->imageFormat = $imageFormat;
        return $this;
    }

    /**
     * Gets as graphicImage
     *
     * @return string
     */
    public function getGraphicImage()
    {
        return $this->graphicImage;
    }

    /**
     * Sets a new graphicImage
     *
     * @param string $graphicImage
     * @return self
     */
    public function setGraphicImage($graphicImage)
    {
        $this->graphicImage = $graphicImage;
        return $this;
    }


}

