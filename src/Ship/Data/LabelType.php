<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing LabelType
 *
 *
 * XSD Type: LabelType
 */
class LabelType extends ImageType
{

    /**
     * @property string[] $graphicImagePart
     */
    private $graphicImagePart = [
        
    ];

    /**
     * @property string $internationalSignatureGraphicImage
     */
    private $internationalSignatureGraphicImage = null;

    /**
     * @property string $hTMLImage
     */
    private $hTMLImage = null;

    /**
     * @property string $pDF417
     */
    private $pDF417 = null;

    /**
     * Adds as graphicImagePart
     *
     * @return self
     * @param string $graphicImagePart
     */
    public function addToGraphicImagePart($graphicImagePart)
    {
        $this->graphicImagePart[] = $graphicImagePart;
        return $this;
    }

    /**
     * isset graphicImagePart
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGraphicImagePart($index)
    {
        return isset($this->graphicImagePart[$index]);
    }

    /**
     * unset graphicImagePart
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGraphicImagePart($index)
    {
        unset($this->graphicImagePart[$index]);
    }

    /**
     * Gets as graphicImagePart
     *
     * @return string[]
     */
    public function getGraphicImagePart()
    {
        return $this->graphicImagePart;
    }

    /**
     * Sets a new graphicImagePart
     *
     * @param string[] $graphicImagePart
     * @return self
     */
    public function setGraphicImagePart(array $graphicImagePart)
    {
        $this->graphicImagePart = $graphicImagePart;
        return $this;
    }

    /**
     * Gets as internationalSignatureGraphicImage
     *
     * @return string
     */
    public function getInternationalSignatureGraphicImage()
    {
        return $this->internationalSignatureGraphicImage;
    }

    /**
     * Sets a new internationalSignatureGraphicImage
     *
     * @param string $internationalSignatureGraphicImage
     * @return self
     */
    public function setInternationalSignatureGraphicImage($internationalSignatureGraphicImage)
    {
        $this->internationalSignatureGraphicImage = $internationalSignatureGraphicImage;
        return $this;
    }

    /**
     * Gets as hTMLImage
     *
     * @return string
     */
    public function getHTMLImage()
    {
        return $this->hTMLImage;
    }

    /**
     * Sets a new hTMLImage
     *
     * @param string $hTMLImage
     * @return self
     */
    public function setHTMLImage($hTMLImage)
    {
        $this->hTMLImage = $hTMLImage;
        return $this;
    }

    /**
     * Gets as pDF417
     *
     * @return string
     */
    public function getPDF417()
    {
        return $this->pDF417;
    }

    /**
     * Sets a new pDF417
     *
     * @param string $pDF417
     * @return self
     */
    public function setPDF417($pDF417)
    {
        $this->pDF417 = $pDF417;
        return $this;
    }


}

