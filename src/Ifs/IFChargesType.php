<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing IFChargesType
 *
 *
 * XSD Type: IFChargesType
 */
class IFChargesType
{

    /**
     * @property string $monetaryValue
     */
    private $monetaryValue = null;

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


}

