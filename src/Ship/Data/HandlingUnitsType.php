<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing HandlingUnitsType
 *
 *
 * XSD Type: HandlingUnitsType
 */
class HandlingUnitsType
{

    /**
     * @property string $quantity
     */
    private $quantity = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipUnitOfMeasurementType $type
     */
    private $type = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\HandlingUnitsDimensionsType $dimensions
     */
    private $dimensions = null;

    /**
     * Gets as quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * @param string $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipUnitOfMeasurementType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipUnitOfMeasurementType $type
     * @return self
     */
    public function setType(\GoetasWebservices\Client\UPS\Ship\Data\ShipUnitOfMeasurementType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as dimensions
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\HandlingUnitsDimensionsType
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * Sets a new dimensions
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\HandlingUnitsDimensionsType $dimensions
     * @return self
     */
    public function setDimensions(\GoetasWebservices\Client\UPS\Ship\Data\HandlingUnitsDimensionsType $dimensions)
    {
        $this->dimensions = $dimensions;
        return $this;
    }


}

