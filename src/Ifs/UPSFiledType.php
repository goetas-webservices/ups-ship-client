<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing UPSFiledType
 *
 *
 * XSD Type: UPSFiledType
 */
class UPSFiledType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\POAType $pOA
     */
    private $pOA = null;

    /**
     * Gets as pOA
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\POAType
     */
    public function getPOA()
    {
        return $this->pOA;
    }

    /**
     * Sets a new pOA
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\POAType $pOA
     * @return self
     */
    public function setPOA(\GoetasWebservices\Client\UPS\Ifs\POAType $pOA)
    {
        $this->pOA = $pOA;
        return $this;
    }


}

