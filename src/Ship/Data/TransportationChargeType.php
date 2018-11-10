<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing TransportationChargeType
 *
 *
 * XSD Type: TransportationChargeType
 */
class TransportationChargeType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $grossCharge
     */
    private $grossCharge = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $discountAmount
     */
    private $discountAmount = null;

    /**
     * @property string $discountPercentage
     */
    private $discountPercentage = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $netCharge
     */
    private $netCharge = null;

    /**
     * Gets as grossCharge
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType
     */
    public function getGrossCharge()
    {
        return $this->grossCharge;
    }

    /**
     * Sets a new grossCharge
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $grossCharge
     * @return self
     */
    public function setGrossCharge(\GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $grossCharge)
    {
        $this->grossCharge = $grossCharge;
        return $this;
    }

    /**
     * Gets as discountAmount
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
     * Sets a new discountAmount
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $discountAmount
     * @return self
     */
    public function setDiscountAmount(\GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $discountAmount)
    {
        $this->discountAmount = $discountAmount;
        return $this;
    }

    /**
     * Gets as discountPercentage
     *
     * @return string
     */
    public function getDiscountPercentage()
    {
        return $this->discountPercentage;
    }

    /**
     * Sets a new discountPercentage
     *
     * @param string $discountPercentage
     * @return self
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;
        return $this;
    }

    /**
     * Gets as netCharge
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType
     */
    public function getNetCharge()
    {
        return $this->netCharge;
    }

    /**
     * Sets a new netCharge
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $netCharge
     * @return self
     */
    public function setNetCharge(\GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $netCharge)
    {
        $this->netCharge = $netCharge;
        return $this;
    }


}

