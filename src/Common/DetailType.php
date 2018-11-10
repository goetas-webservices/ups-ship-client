<?php

namespace GoetasWebservices\Client\UPS\Common;

/**
 * Class representing DetailType
 *
 *
 * XSD Type: DetailType
 */
class DetailType
{

    /**
     * @property string $code
     */
    private $code = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Common\ElementLevelInformationType $elementLevelInformation
     */
    private $elementLevelInformation = null;

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
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as elementLevelInformation
     *
     * @return \GoetasWebservices\Client\UPS\Common\ElementLevelInformationType
     */
    public function getElementLevelInformation()
    {
        return $this->elementLevelInformation;
    }

    /**
     * Sets a new elementLevelInformation
     *
     * @param \GoetasWebservices\Client\UPS\Common\ElementLevelInformationType $elementLevelInformation
     * @return self
     */
    public function setElementLevelInformation(\GoetasWebservices\Client\UPS\Common\ElementLevelInformationType $elementLevelInformation)
    {
        $this->elementLevelInformation = $elementLevelInformation;
        return $this;
    }


}

