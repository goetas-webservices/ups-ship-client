<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing CommodityType
 *
 *
 * XSD Type: CommodityType
 */
class CommodityType
{

    /**
     * @property string $freightClass
     */
    private $freightClass = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\NMFCType $nMFC
     */
    private $nMFC = null;

    /**
     * Gets as freightClass
     *
     * @return string
     */
    public function getFreightClass()
    {
        return $this->freightClass;
    }

    /**
     * Sets a new freightClass
     *
     * @param string $freightClass
     * @return self
     */
    public function setFreightClass($freightClass)
    {
        $this->freightClass = $freightClass;
        return $this;
    }

    /**
     * Gets as nMFC
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\NMFCType
     */
    public function getNMFC()
    {
        return $this->nMFC;
    }

    /**
     * Sets a new nMFC
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\NMFCType $nMFC
     * @return self
     */
    public function setNMFC(\GoetasWebservices\Client\UPS\Ship\Data\NMFCType $nMFC)
    {
        $this->nMFC = $nMFC;
        return $this;
    }


}

