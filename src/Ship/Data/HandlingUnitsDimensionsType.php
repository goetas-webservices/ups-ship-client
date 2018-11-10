<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing HandlingUnitsDimensionsType
 *
 *
 * XSD Type: HandlingUnitsDimensionsType
 */
class HandlingUnitsDimensionsType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipUnitOfMeasurementType $unitOfMeasurement
     */
    private $unitOfMeasurement = null;

    /**
     * @property string $length
     */
    private $length = null;

    /**
     * @property string $width
     */
    private $width = null;

    /**
     * @property string $height
     */
    private $height = null;

    /**
     * Gets as unitOfMeasurement
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipUnitOfMeasurementType
     */
    public function getUnitOfMeasurement()
    {
        return $this->unitOfMeasurement;
    }

    /**
     * Sets a new unitOfMeasurement
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipUnitOfMeasurementType $unitOfMeasurement
     * @return self
     */
    public function setUnitOfMeasurement(\GoetasWebservices\Client\UPS\Ship\Data\ShipUnitOfMeasurementType $unitOfMeasurement)
    {
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }

    /**
     * Gets as length
     *
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * @param string $length
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Gets as width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * @param string $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Gets as height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * @param string $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }


}

