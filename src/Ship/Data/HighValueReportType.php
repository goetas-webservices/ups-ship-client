<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing HighValueReportType
 *
 *
 * XSD Type: HighValueReportType
 */
class HighValueReportType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ImageType $image
     */
    private $image = null;

    /**
     * Gets as image
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ImageType
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ImageType $image
     * @return self
     */
    public function setImage(\GoetasWebservices\Client\UPS\Ship\Data\ImageType $image)
    {
        $this->image = $image;
        return $this;
    }


}

