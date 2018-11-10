<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing AdjustedHeightType
 *
 *
 * XSD Type: AdjustedHeightType
 */
class AdjustedHeightType
{

    /**
     * @property string $value
     */
    private $value = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipUnitOfMeasurementType $unitOfMeasurement
     */
    private $unitOfMeasurement = null;

    /**
     * Gets as value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

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


}

