<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing NMFCType
 *
 *
 * XSD Type: NMFCType
 */
class NMFCType
{

    /**
     * @property string $primeCode
     */
    private $primeCode = null;

    /**
     * @property string $subCode
     */
    private $subCode = null;

    /**
     * Gets as primeCode
     *
     * @return string
     */
    public function getPrimeCode()
    {
        return $this->primeCode;
    }

    /**
     * Sets a new primeCode
     *
     * @param string $primeCode
     * @return self
     */
    public function setPrimeCode($primeCode)
    {
        $this->primeCode = $primeCode;
        return $this;
    }

    /**
     * Gets as subCode
     *
     * @return string
     */
    public function getSubCode()
    {
        return $this->subCode;
    }

    /**
     * Sets a new subCode
     *
     * @param string $subCode
     * @return self
     */
    public function setSubCode($subCode)
    {
        $this->subCode = $subCode;
        return $this;
    }


}

