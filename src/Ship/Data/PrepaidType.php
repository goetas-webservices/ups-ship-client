<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing PrepaidType
 *
 *
 * XSD Type: PrepaidType
 */
class PrepaidType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\BillShipperType $billShipper
     */
    private $billShipper = null;

    /**
     * Gets as billShipper
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\BillShipperType
     */
    public function getBillShipper()
    {
        return $this->billShipper;
    }

    /**
     * Sets a new billShipper
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\BillShipperType $billShipper
     * @return self
     */
    public function setBillShipper(\GoetasWebservices\Client\UPS\Ship\Data\BillShipperType $billShipper)
    {
        $this->billShipper = $billShipper;
        return $this;
    }


}

