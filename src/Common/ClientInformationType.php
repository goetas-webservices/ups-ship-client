<?php

namespace GoetasWebservices\Client\UPS\Common;

/**
 * Class representing ClientInformationType
 *
 *
 * XSD Type: ClientInformationType
 */
class ClientInformationType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Common\ClientInformationType\PropertyAType[] $property
     */
    private $property = [
        
    ];

    /**
     * Adds as property
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Common\ClientInformationType\PropertyAType $property
     */
    public function addToProperty(\GoetasWebservices\Client\UPS\Common\ClientInformationType\PropertyAType $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProperty($index)
    {
        return isset($this->property[$index]);
    }

    /**
     * unset property
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProperty($index)
    {
        unset($this->property[$index]);
    }

    /**
     * Gets as property
     *
     * @return \GoetasWebservices\Client\UPS\Common\ClientInformationType\PropertyAType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * @param \GoetasWebservices\Client\UPS\Common\ClientInformationType\PropertyAType[] $property
     * @return self
     */
    public function setProperty(array $property)
    {
        $this->property = $property;
        return $this;
    }


}

