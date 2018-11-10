<?php

namespace GoetasWebservices\Client\UPS\Error;

/**
 * Class representing LocationType
 *
 *
 * XSD Type: LocationType
 */
class LocationType
{

    /**
     * @property string $locationElementName
     */
    private $locationElementName = null;

    /**
     * @property string $xPathOfElement
     */
    private $xPathOfElement = null;

    /**
     * @property string $originalValue
     */
    private $originalValue = null;

    /**
     * Gets as locationElementName
     *
     * @return string
     */
    public function getLocationElementName()
    {
        return $this->locationElementName;
    }

    /**
     * Sets a new locationElementName
     *
     * @param string $locationElementName
     * @return self
     */
    public function setLocationElementName($locationElementName)
    {
        $this->locationElementName = $locationElementName;
        return $this;
    }

    /**
     * Gets as xPathOfElement
     *
     * @return string
     */
    public function getXPathOfElement()
    {
        return $this->xPathOfElement;
    }

    /**
     * Sets a new xPathOfElement
     *
     * @param string $xPathOfElement
     * @return self
     */
    public function setXPathOfElement($xPathOfElement)
    {
        $this->xPathOfElement = $xPathOfElement;
        return $this;
    }

    /**
     * Gets as originalValue
     *
     * @return string
     */
    public function getOriginalValue()
    {
        return $this->originalValue;
    }

    /**
     * Sets a new originalValue
     *
     * @param string $originalValue
     * @return self
     */
    public function setOriginalValue($originalValue)
    {
        $this->originalValue = $originalValue;
        return $this;
    }


}

