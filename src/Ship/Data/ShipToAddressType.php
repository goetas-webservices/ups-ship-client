<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing ShipToAddressType
 *
 *
 * XSD Type: ShipToAddressType
 */
class ShipToAddressType extends ShipAddressType
{

    /**
     * @property string $residentialAddressIndicator
     */
    private $residentialAddressIndicator = null;

    /**
     * Gets as residentialAddressIndicator
     *
     * @return string
     */
    public function getResidentialAddressIndicator()
    {
        return $this->residentialAddressIndicator;
    }

    /**
     * Sets a new residentialAddressIndicator
     *
     * @param string $residentialAddressIndicator
     * @return self
     */
    public function setResidentialAddressIndicator($residentialAddressIndicator)
    {
        $this->residentialAddressIndicator = $residentialAddressIndicator;
        return $this;
    }


}

