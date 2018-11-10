<?php

namespace GoetasWebservices\Client\UPS\Error;

/**
 * Class representing ElementIdentifierType
 *
 *
 * XSD Type: ElementIdentifierType
 */
class ElementIdentifierType
{

    /**
     * @property string $code
     */
    private $code = null;

    /**
     * @property string $value
     */
    private $value = null;

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

