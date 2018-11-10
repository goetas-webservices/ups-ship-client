<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing PackageServiceOptionsType
 *
 *
 * XSD Type: PackageServiceOptionsType
 */
class PackageServiceOptionsType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\DeliveryConfirmationType $deliveryConfirmation
     */
    private $deliveryConfirmation = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\PackageDeclaredValueType $declaredValue
     */
    private $declaredValue = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\PSOCODType $cOD
     */
    private $cOD = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\PackageServiceOptionsAccessPointCODType $accessPointCOD
     */
    private $accessPointCOD = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\VerbalConfirmationType $verbalConfirmation
     */
    private $verbalConfirmation = null;

    /**
     * @property string $shipperReleaseIndicator
     */
    private $shipperReleaseIndicator = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\PSONotificationType $notification
     */
    private $notification = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\HazMatType[] $hazMat
     */
    private $hazMat = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\DryIceType $dryIce
     */
    private $dryIce = null;

    /**
     * @property string $uPSPremiumCareIndicator
     */
    private $uPSPremiumCareIndicator = null;

    /**
     * @property string $proactiveIndicator
     */
    private $proactiveIndicator = null;

    /**
     * @property string $packageIdentifier
     */
    private $packageIdentifier = null;

    /**
     * @property string $clinicalTrialsID
     */
    private $clinicalTrialsID = null;

    /**
     * @property string $refrigerationIndicator
     */
    private $refrigerationIndicator = null;

    /**
     * Gets as deliveryConfirmation
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\DeliveryConfirmationType
     */
    public function getDeliveryConfirmation()
    {
        return $this->deliveryConfirmation;
    }

    /**
     * Sets a new deliveryConfirmation
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\DeliveryConfirmationType $deliveryConfirmation
     * @return self
     */
    public function setDeliveryConfirmation(\GoetasWebservices\Client\UPS\Ship\Data\DeliveryConfirmationType $deliveryConfirmation)
    {
        $this->deliveryConfirmation = $deliveryConfirmation;
        return $this;
    }

    /**
     * Gets as declaredValue
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\PackageDeclaredValueType
     */
    public function getDeclaredValue()
    {
        return $this->declaredValue;
    }

    /**
     * Sets a new declaredValue
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\PackageDeclaredValueType $declaredValue
     * @return self
     */
    public function setDeclaredValue(\GoetasWebservices\Client\UPS\Ship\Data\PackageDeclaredValueType $declaredValue)
    {
        $this->declaredValue = $declaredValue;
        return $this;
    }

    /**
     * Gets as cOD
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\PSOCODType
     */
    public function getCOD()
    {
        return $this->cOD;
    }

    /**
     * Sets a new cOD
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\PSOCODType $cOD
     * @return self
     */
    public function setCOD(\GoetasWebservices\Client\UPS\Ship\Data\PSOCODType $cOD)
    {
        $this->cOD = $cOD;
        return $this;
    }

    /**
     * Gets as accessPointCOD
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\PackageServiceOptionsAccessPointCODType
     */
    public function getAccessPointCOD()
    {
        return $this->accessPointCOD;
    }

    /**
     * Sets a new accessPointCOD
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\PackageServiceOptionsAccessPointCODType $accessPointCOD
     * @return self
     */
    public function setAccessPointCOD(\GoetasWebservices\Client\UPS\Ship\Data\PackageServiceOptionsAccessPointCODType $accessPointCOD)
    {
        $this->accessPointCOD = $accessPointCOD;
        return $this;
    }

    /**
     * Gets as verbalConfirmation
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\VerbalConfirmationType
     */
    public function getVerbalConfirmation()
    {
        return $this->verbalConfirmation;
    }

    /**
     * Sets a new verbalConfirmation
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\VerbalConfirmationType $verbalConfirmation
     * @return self
     */
    public function setVerbalConfirmation(\GoetasWebservices\Client\UPS\Ship\Data\VerbalConfirmationType $verbalConfirmation)
    {
        $this->verbalConfirmation = $verbalConfirmation;
        return $this;
    }

    /**
     * Gets as shipperReleaseIndicator
     *
     * @return string
     */
    public function getShipperReleaseIndicator()
    {
        return $this->shipperReleaseIndicator;
    }

    /**
     * Sets a new shipperReleaseIndicator
     *
     * @param string $shipperReleaseIndicator
     * @return self
     */
    public function setShipperReleaseIndicator($shipperReleaseIndicator)
    {
        $this->shipperReleaseIndicator = $shipperReleaseIndicator;
        return $this;
    }

    /**
     * Gets as notification
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\PSONotificationType
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * Sets a new notification
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\PSONotificationType $notification
     * @return self
     */
    public function setNotification(\GoetasWebservices\Client\UPS\Ship\Data\PSONotificationType $notification)
    {
        $this->notification = $notification;
        return $this;
    }

    /**
     * Adds as hazMat
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ship\Data\HazMatType $hazMat
     */
    public function addToHazMat(\GoetasWebservices\Client\UPS\Ship\Data\HazMatType $hazMat)
    {
        $this->hazMat[] = $hazMat;
        return $this;
    }

    /**
     * isset hazMat
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHazMat($index)
    {
        return isset($this->hazMat[$index]);
    }

    /**
     * unset hazMat
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHazMat($index)
    {
        unset($this->hazMat[$index]);
    }

    /**
     * Gets as hazMat
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\HazMatType[]
     */
    public function getHazMat()
    {
        return $this->hazMat;
    }

    /**
     * Sets a new hazMat
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\HazMatType[] $hazMat
     * @return self
     */
    public function setHazMat(array $hazMat)
    {
        $this->hazMat = $hazMat;
        return $this;
    }

    /**
     * Gets as dryIce
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\DryIceType
     */
    public function getDryIce()
    {
        return $this->dryIce;
    }

    /**
     * Sets a new dryIce
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\DryIceType $dryIce
     * @return self
     */
    public function setDryIce(\GoetasWebservices\Client\UPS\Ship\Data\DryIceType $dryIce)
    {
        $this->dryIce = $dryIce;
        return $this;
    }

    /**
     * Gets as uPSPremiumCareIndicator
     *
     * @return string
     */
    public function getUPSPremiumCareIndicator()
    {
        return $this->uPSPremiumCareIndicator;
    }

    /**
     * Sets a new uPSPremiumCareIndicator
     *
     * @param string $uPSPremiumCareIndicator
     * @return self
     */
    public function setUPSPremiumCareIndicator($uPSPremiumCareIndicator)
    {
        $this->uPSPremiumCareIndicator = $uPSPremiumCareIndicator;
        return $this;
    }

    /**
     * Gets as proactiveIndicator
     *
     * @return string
     */
    public function getProactiveIndicator()
    {
        return $this->proactiveIndicator;
    }

    /**
     * Sets a new proactiveIndicator
     *
     * @param string $proactiveIndicator
     * @return self
     */
    public function setProactiveIndicator($proactiveIndicator)
    {
        $this->proactiveIndicator = $proactiveIndicator;
        return $this;
    }

    /**
     * Gets as packageIdentifier
     *
     * @return string
     */
    public function getPackageIdentifier()
    {
        return $this->packageIdentifier;
    }

    /**
     * Sets a new packageIdentifier
     *
     * @param string $packageIdentifier
     * @return self
     */
    public function setPackageIdentifier($packageIdentifier)
    {
        $this->packageIdentifier = $packageIdentifier;
        return $this;
    }

    /**
     * Gets as clinicalTrialsID
     *
     * @return string
     */
    public function getClinicalTrialsID()
    {
        return $this->clinicalTrialsID;
    }

    /**
     * Sets a new clinicalTrialsID
     *
     * @param string $clinicalTrialsID
     * @return self
     */
    public function setClinicalTrialsID($clinicalTrialsID)
    {
        $this->clinicalTrialsID = $clinicalTrialsID;
        return $this;
    }

    /**
     * Gets as refrigerationIndicator
     *
     * @return string
     */
    public function getRefrigerationIndicator()
    {
        return $this->refrigerationIndicator;
    }

    /**
     * Sets a new refrigerationIndicator
     *
     * @param string $refrigerationIndicator
     * @return self
     */
    public function setRefrigerationIndicator($refrigerationIndicator)
    {
        $this->refrigerationIndicator = $refrigerationIndicator;
        return $this;
    }


}

