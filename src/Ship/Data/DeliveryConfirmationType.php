<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing DeliveryConfirmationType
 *
 *
 * XSD Type: DeliveryConfirmationType
 */
class DeliveryConfirmationType
{

    /**
     * @property string $dCISType
     */
    private $dCISType = null;

    /**
     * @property string $dCISNumber
     */
    private $dCISNumber = null;

    /**
     * Gets as dCISType
     *
     * @return string
     */
    public function getDCISType()
    {
        return $this->dCISType;
    }

    /**
     * Sets a new dCISType
     *
     * @param string $dCISType
     * @return self
     */
    public function setDCISType($dCISType)
    {
        $this->dCISType = $dCISType;
        return $this;
    }

    /**
     * Gets as dCISNumber
     *
     * @return string
     */
    public function getDCISNumber()
    {
        return $this->dCISNumber;
    }

    /**
     * Sets a new dCISNumber
     *
     * @param string $dCISNumber
     * @return self
     */
    public function setDCISNumber($dCISNumber)
    {
        $this->dCISNumber = $dCISNumber;
        return $this;
    }


}

