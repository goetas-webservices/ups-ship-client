<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing BillReceiverAddressType
 *
 *
 * XSD Type: BillReceiverAddressType
 */
class BillReceiverAddressType
{

    /**
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * Gets as postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }


}

