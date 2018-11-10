<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing DDTCInformationType
 *
 *
 * XSD Type: DDTCInformationType
 */
class DDTCInformationType
{

    /**
     * @property string $iTARExemptionNumber
     */
    private $iTARExemptionNumber = null;

    /**
     * @property string $uSMLCategoryCode
     */
    private $uSMLCategoryCode = null;

    /**
     * @property string $eligiblePartyIndicator
     */
    private $eligiblePartyIndicator = null;

    /**
     * @property string $registrationNumber
     */
    private $registrationNumber = null;

    /**
     * @property string $quantity
     */
    private $quantity = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\UnitOfMeasurementType $unitOfMeasurement
     */
    private $unitOfMeasurement = null;

    /**
     * @property string $significantMilitaryEquipmentIndicator
     */
    private $significantMilitaryEquipmentIndicator = null;

    /**
     * @property string $aCMNumber
     */
    private $aCMNumber = null;

    /**
     * Gets as iTARExemptionNumber
     *
     * @return string
     */
    public function getITARExemptionNumber()
    {
        return $this->iTARExemptionNumber;
    }

    /**
     * Sets a new iTARExemptionNumber
     *
     * @param string $iTARExemptionNumber
     * @return self
     */
    public function setITARExemptionNumber($iTARExemptionNumber)
    {
        $this->iTARExemptionNumber = $iTARExemptionNumber;
        return $this;
    }

    /**
     * Gets as uSMLCategoryCode
     *
     * @return string
     */
    public function getUSMLCategoryCode()
    {
        return $this->uSMLCategoryCode;
    }

    /**
     * Sets a new uSMLCategoryCode
     *
     * @param string $uSMLCategoryCode
     * @return self
     */
    public function setUSMLCategoryCode($uSMLCategoryCode)
    {
        $this->uSMLCategoryCode = $uSMLCategoryCode;
        return $this;
    }

    /**
     * Gets as eligiblePartyIndicator
     *
     * @return string
     */
    public function getEligiblePartyIndicator()
    {
        return $this->eligiblePartyIndicator;
    }

    /**
     * Sets a new eligiblePartyIndicator
     *
     * @param string $eligiblePartyIndicator
     * @return self
     */
    public function setEligiblePartyIndicator($eligiblePartyIndicator)
    {
        $this->eligiblePartyIndicator = $eligiblePartyIndicator;
        return $this;
    }

    /**
     * Gets as registrationNumber
     *
     * @return string
     */
    public function getRegistrationNumber()
    {
        return $this->registrationNumber;
    }

    /**
     * Sets a new registrationNumber
     *
     * @param string $registrationNumber
     * @return self
     */
    public function setRegistrationNumber($registrationNumber)
    {
        $this->registrationNumber = $registrationNumber;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * @param string $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as unitOfMeasurement
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\UnitOfMeasurementType
     */
    public function getUnitOfMeasurement()
    {
        return $this->unitOfMeasurement;
    }

    /**
     * Sets a new unitOfMeasurement
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\UnitOfMeasurementType $unitOfMeasurement
     * @return self
     */
    public function setUnitOfMeasurement(\GoetasWebservices\Client\UPS\Ifs\UnitOfMeasurementType $unitOfMeasurement)
    {
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }

    /**
     * Gets as significantMilitaryEquipmentIndicator
     *
     * @return string
     */
    public function getSignificantMilitaryEquipmentIndicator()
    {
        return $this->significantMilitaryEquipmentIndicator;
    }

    /**
     * Sets a new significantMilitaryEquipmentIndicator
     *
     * @param string $significantMilitaryEquipmentIndicator
     * @return self
     */
    public function setSignificantMilitaryEquipmentIndicator($significantMilitaryEquipmentIndicator)
    {
        $this->significantMilitaryEquipmentIndicator = $significantMilitaryEquipmentIndicator;
        return $this;
    }

    /**
     * Gets as aCMNumber
     *
     * @return string
     */
    public function getACMNumber()
    {
        return $this->aCMNumber;
    }

    /**
     * Sets a new aCMNumber
     *
     * @param string $aCMNumber
     * @return self
     */
    public function setACMNumber($aCMNumber)
    {
        $this->aCMNumber = $aCMNumber;
        return $this;
    }


}

