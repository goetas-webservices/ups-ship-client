<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing ReferenceNumberType
 *
 *
 * XSD Type: ReferenceNumberType
 */
class ReferenceNumberType
{

    /**
     * @property string $barCodeIndicator
     */
    private $barCodeIndicator = null;

    /**
     * @property string $code
     */
    private $code = null;

    /**
     * @property string $value
     */
    private $value = null;

    /**
     * Gets as barCodeIndicator
     *
     * @return string
     */
    public function getBarCodeIndicator()
    {
        return $this->barCodeIndicator;
    }

    /**
     * Sets a new barCodeIndicator
     *
     * @param string $barCodeIndicator
     * @return self
     */
    public function setBarCodeIndicator($barCodeIndicator)
    {
        $this->barCodeIndicator = $barCodeIndicator;
        return $this;
    }

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

