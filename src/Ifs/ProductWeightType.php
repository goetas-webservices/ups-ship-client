<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing ProductWeightType
 *
 *
 * XSD Type: ProductWeightType
 */
class ProductWeightType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\UnitOfMeasurementType $unitOfMeasurement
     */
    private $unitOfMeasurement = null;

    /**
     * @property string $weight
     */
    private $weight = null;

    /**
     * Gets as unitOfMeasurement
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\UnitOfMeasurementType
     */
    public function getUnitOfMeasurement()
    {
        return $this->unitOfMeasurement;
    }

    /**
     * Sets a new unitOfMeasurement
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\UnitOfMeasurementType $unitOfMeasurement
     * @return self
     */
    public function setUnitOfMeasurement(\GoetasWebservices\Client\UPS\Ifs\UnitOfMeasurementType $unitOfMeasurement)
    {
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }

    /**
     * Gets as weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * @param string $weight
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }


}

