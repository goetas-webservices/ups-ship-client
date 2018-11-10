<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing ShipPhoneType
 *
 *
 * XSD Type: ShipPhoneType
 */
class ShipPhoneType
{

    /**
     * @property string $number
     */
    private $number = null;

    /**
     * @property string $extension
     */
    private $extension = null;

    /**
     * Gets as number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * @param string $extension
     * @return self
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }


}

