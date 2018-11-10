<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing BillingWeightType
 *
 *
 * XSD Type: BillingWeightType
 */
class BillingWeightType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\BillingUnitOfMeasurementType $unitOfMeasurement
     */
    private $unitOfMeasurement = null;

    /**
     * @property string $weight
     */
    private $weight = null;

    /**
     * Gets as unitOfMeasurement
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\BillingUnitOfMeasurementType
     */
    public function getUnitOfMeasurement()
    {
        return $this->unitOfMeasurement;
    }

    /**
     * Sets a new unitOfMeasurement
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\BillingUnitOfMeasurementType $unitOfMeasurement
     * @return self
     */
    public function setUnitOfMeasurement(\GoetasWebservices\Client\UPS\Ship\Data\BillingUnitOfMeasurementType $unitOfMeasurement)
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

