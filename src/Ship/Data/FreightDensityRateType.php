<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing FreightDensityRateType
 *
 *
 * XSD Type: FreightDensityRateType
 */
class FreightDensityRateType
{

    /**
     * @property string $density
     */
    private $density = null;

    /**
     * @property string $totalCubicFeet
     */
    private $totalCubicFeet = null;

    /**
     * Gets as density
     *
     * @return string
     */
    public function getDensity()
    {
        return $this->density;
    }

    /**
     * Sets a new density
     *
     * @param string $density
     * @return self
     */
    public function setDensity($density)
    {
        $this->density = $density;
        return $this;
    }

    /**
     * Gets as totalCubicFeet
     *
     * @return string
     */
    public function getTotalCubicFeet()
    {
        return $this->totalCubicFeet;
    }

    /**
     * Sets a new totalCubicFeet
     *
     * @param string $totalCubicFeet
     * @return self
     */
    public function setTotalCubicFeet($totalCubicFeet)
    {
        $this->totalCubicFeet = $totalCubicFeet;
        return $this;
    }


}

