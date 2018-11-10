<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing TaxChargeType
 *
 *
 * XSD Type: TaxChargeType
 */
class TaxChargeType
{

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property string $monetaryValue
     */
    private $monetaryValue = null;

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

