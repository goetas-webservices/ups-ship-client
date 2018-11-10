<?php

namespace GoetasWebservices\Client\UPS\Upss\UPSSecurity;

/**
 * Class representing ServiceAccessTokenAType
 */
class ServiceAccessTokenAType
{

    /**
     * @property string $accessLicenseNumber
     */
    private $accessLicenseNumber = null;

    /**
     * Gets as accessLicenseNumber
     *
     * @return string
     */
    public function getAccessLicenseNumber()
    {
        return $this->accessLicenseNumber;
    }

    /**
     * Sets a new accessLicenseNumber
     *
     * @param string $accessLicenseNumber
     * @return self
     */
    public function setAccessLicenseNumber($accessLicenseNumber)
    {
        $this->accessLicenseNumber = $accessLicenseNumber;
        return $this;
    }


}

