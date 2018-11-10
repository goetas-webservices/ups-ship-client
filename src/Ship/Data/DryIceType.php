<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing DryIceType
 *
 *
 * XSD Type: DryIceType
 */
class DryIceType
{

    /**
     * @property string $regulationSet
     */
    private $regulationSet = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\DryIceWeightType $dryIceWeight
     */
    private $dryIceWeight = null;

    /**
     * @property string $medicalUseIndicator
     */
    private $medicalUseIndicator = null;

    /**
     * Gets as regulationSet
     *
     * @return string
     */
    public function getRegulationSet()
    {
        return $this->regulationSet;
    }

    /**
     * Sets a new regulationSet
     *
     * @param string $regulationSet
     * @return self
     */
    public function setRegulationSet($regulationSet)
    {
        $this->regulationSet = $regulationSet;
        return $this;
    }

    /**
     * Gets as dryIceWeight
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\DryIceWeightType
     */
    public function getDryIceWeight()
    {
        return $this->dryIceWeight;
    }

    /**
     * Sets a new dryIceWeight
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\DryIceWeightType $dryIceWeight
     * @return self
     */
    public function setDryIceWeight(\GoetasWebservices\Client\UPS\Ship\Data\DryIceWeightType $dryIceWeight)
    {
        $this->dryIceWeight = $dryIceWeight;
        return $this;
    }

    /**
     * Gets as medicalUseIndicator
     *
     * @return string
     */
    public function getMedicalUseIndicator()
    {
        return $this->medicalUseIndicator;
    }

    /**
     * Sets a new medicalUseIndicator
     *
     * @param string $medicalUseIndicator
     * @return self
     */
    public function setMedicalUseIndicator($medicalUseIndicator)
    {
        $this->medicalUseIndicator = $medicalUseIndicator;
        return $this;
    }


}

