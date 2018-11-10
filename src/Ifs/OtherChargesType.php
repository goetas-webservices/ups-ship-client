<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing OtherChargesType
 *
 *
 * XSD Type: OtherChargesType
 */
class OtherChargesType
{

    /**
     * @property string $monetaryValue
     */
    private $monetaryValue = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * Gets as monetaryValue
     *
     * @return string
     */
    public function getMonetaryValue()
    {
        return $this->monetaryValue;
    }

    /**
     * Sets a new monetaryValue
     *
     * @param string $monetaryValue
     * @return self
     */
    public function setMonetaryValue($monetaryValue)
    {
        $this->monetaryValue = $monetaryValue;
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


}

