<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing FreightShipmentInformationType
 *
 *
 * XSD Type: FreightShipmentInformationType
 */
class FreightShipmentInformationType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\FreightDensityInfoType $freightDensityInfo
     */
    private $freightDensityInfo = null;

    /**
     * @property string $densityEligibleIndicator
     */
    private $densityEligibleIndicator = null;

    /**
     * Gets as freightDensityInfo
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\FreightDensityInfoType
     */
    public function getFreightDensityInfo()
    {
        return $this->freightDensityInfo;
    }

    /**
     * Sets a new freightDensityInfo
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\FreightDensityInfoType $freightDensityInfo
     * @return self
     */
    public function setFreightDensityInfo(\GoetasWebservices\Client\UPS\Ship\Data\FreightDensityInfoType $freightDensityInfo)
    {
        $this->freightDensityInfo = $freightDensityInfo;
        return $this;
    }

    /**
     * Gets as densityEligibleIndicator
     *
     * @return string
     */
    public function getDensityEligibleIndicator()
    {
        return $this->densityEligibleIndicator;
    }

    /**
     * Sets a new densityEligibleIndicator
     *
     * @param string $densityEligibleIndicator
     * @return self
     */
    public function setDensityEligibleIndicator($densityEligibleIndicator)
    {
        $this->densityEligibleIndicator = $densityEligibleIndicator;
        return $this;
    }


}

