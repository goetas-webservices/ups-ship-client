<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing FreightDensityInfoType
 *
 *
 * XSD Type: FreightDensityInfoType
 */
class FreightDensityInfoType
{

    /**
     * @property string $adjustedHeightIndicator
     */
    private $adjustedHeightIndicator = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\AdjustedHeightType $adjustedHeight
     */
    private $adjustedHeight = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\HandlingUnitsType[] $handlingUnits
     */
    private $handlingUnits = [
        
    ];

    /**
     * Gets as adjustedHeightIndicator
     *
     * @return string
     */
    public function getAdjustedHeightIndicator()
    {
        return $this->adjustedHeightIndicator;
    }

    /**
     * Sets a new adjustedHeightIndicator
     *
     * @param string $adjustedHeightIndicator
     * @return self
     */
    public function setAdjustedHeightIndicator($adjustedHeightIndicator)
    {
        $this->adjustedHeightIndicator = $adjustedHeightIndicator;
        return $this;
    }

    /**
     * Gets as adjustedHeight
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\AdjustedHeightType
     */
    public function getAdjustedHeight()
    {
        return $this->adjustedHeight;
    }

    /**
     * Sets a new adjustedHeight
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\AdjustedHeightType $adjustedHeight
     * @return self
     */
    public function setAdjustedHeight(\GoetasWebservices\Client\UPS\Ship\Data\AdjustedHeightType $adjustedHeight)
    {
        $this->adjustedHeight = $adjustedHeight;
        return $this;
    }

    /**
     * Adds as handlingUnits
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ship\Data\HandlingUnitsType $handlingUnits
     */
    public function addToHandlingUnits(\GoetasWebservices\Client\UPS\Ship\Data\HandlingUnitsType $handlingUnits)
    {
        $this->handlingUnits[] = $handlingUnits;
        return $this;
    }

    /**
     * isset handlingUnits
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandlingUnits($index)
    {
        return isset($this->handlingUnits[$index]);
    }

    /**
     * unset handlingUnits
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandlingUnits($index)
    {
        unset($this->handlingUnits[$index]);
    }

    /**
     * Gets as handlingUnits
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\HandlingUnitsType[]
     */
    public function getHandlingUnits()
    {
        return $this->handlingUnits;
    }

    /**
     * Sets a new handlingUnits
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\HandlingUnitsType[] $handlingUnits
     * @return self
     */
    public function setHandlingUnits(array $handlingUnits)
    {
        $this->handlingUnits = $handlingUnits;
        return $this;
    }


}

