<?php

namespace GoetasWebservices\Client\UPS\Error;

/**
 * Class representing AdditionalInfoType
 *
 *
 * XSD Type: AdditionalInfoType
 */
class AdditionalInfoType
{

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Error\AdditionalCodeDescType[] $value
     */
    private $value = [
        
    ];

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as value
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Error\AdditionalCodeDescType $value
     */
    public function addToValue(\GoetasWebservices\Client\UPS\Error\AdditionalCodeDescType $value)
    {
        $this->value[] = $value;
        return $this;
    }

    /**
     * isset value
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValue($index)
    {
        return isset($this->value[$index]);
    }

    /**
     * unset value
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValue($index)
    {
        unset($this->value[$index]);
    }

    /**
     * Gets as value
     *
     * @return \GoetasWebservices\Client\UPS\Error\AdditionalCodeDescType[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param \GoetasWebservices\Client\UPS\Error\AdditionalCodeDescType[] $value
     * @return self
     */
    public function setValue(array $value)
    {
        $this->value = $value;
        return $this;
    }


}

