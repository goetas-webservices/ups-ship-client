<?php

namespace GoetasWebservices\Client\UPS\Upss;

/**
 * Class representing UPSSecurity
 */
class UPSSecurity
{

    /**
     * @property \GoetasWebservices\Client\UPS\Upss\UPSSecurity\UsernameTokenAType $usernameToken
     */
    private $usernameToken = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Upss\UPSSecurity\ServiceAccessTokenAType $serviceAccessToken
     */
    private $serviceAccessToken = null;

    /**
     * Gets as usernameToken
     *
     * @return \GoetasWebservices\Client\UPS\Upss\UPSSecurity\UsernameTokenAType
     */
    public function getUsernameToken()
    {
        return $this->usernameToken;
    }

    /**
     * Sets a new usernameToken
     *
     * @param \GoetasWebservices\Client\UPS\Upss\UPSSecurity\UsernameTokenAType $usernameToken
     * @return self
     */
    public function setUsernameToken(\GoetasWebservices\Client\UPS\Upss\UPSSecurity\UsernameTokenAType $usernameToken)
    {
        $this->usernameToken = $usernameToken;
        return $this;
    }

    /**
     * Gets as serviceAccessToken
     *
     * @return \GoetasWebservices\Client\UPS\Upss\UPSSecurity\ServiceAccessTokenAType
     */
    public function getServiceAccessToken()
    {
        return $this->serviceAccessToken;
    }

    /**
     * Sets a new serviceAccessToken
     *
     * @param \GoetasWebservices\Client\UPS\Upss\UPSSecurity\ServiceAccessTokenAType $serviceAccessToken
     * @return self
     */
    public function setServiceAccessToken(\GoetasWebservices\Client\UPS\Upss\UPSSecurity\ServiceAccessTokenAType $serviceAccessToken)
    {
        $this->serviceAccessToken = $serviceAccessToken;
        return $this;
    }


}

