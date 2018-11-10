<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing ProductType
 *
 *
 * XSD Type: ProductType
 */
class ProductType
{

    /**
     * @property string[] $description
     */
    private $description = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\UnitType $unit
     */
    private $unit = null;

    /**
     * @property string $commodityCode
     */
    private $commodityCode = null;

    /**
     * @property string $partNumber
     */
    private $partNumber = null;

    /**
     * @property string $originCountryCode
     */
    private $originCountryCode = null;

    /**
     * @property string $jointProductionIndicator
     */
    private $jointProductionIndicator = null;

    /**
     * @property string $netCostCode
     */
    private $netCostCode = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\NetCostDateType $netCostDateRange
     */
    private $netCostDateRange = null;

    /**
     * @property string $preferenceCriteria
     */
    private $preferenceCriteria = null;

    /**
     * @property string $producerInfo
     */
    private $producerInfo = null;

    /**
     * @property string $marksAndNumbers
     */
    private $marksAndNumbers = null;

    /**
     * @property string $numberOfPackagesPerCommodity
     */
    private $numberOfPackagesPerCommodity = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\ProductWeightType $productWeight
     */
    private $productWeight = null;

    /**
     * @property string $vehicleID
     */
    private $vehicleID = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\ScheduleBType $scheduleB
     */
    private $scheduleB = null;

    /**
     * @property string $exportType
     */
    private $exportType = null;

    /**
     * @property string $sEDTotalValue
     */
    private $sEDTotalValue = null;

    /**
     * @property string[] $excludeFromForm
     */
    private $excludeFromForm = null;

    /**
     * @property string $productCurrencyCode
     */
    private $productCurrencyCode = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\PackageAssociatedType[] $packingListInfo
     */
    private $packingListInfo = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\EEIInformationType $eEIInformation
     */
    private $eEIInformation = null;

    /**
     * Adds as description
     *
     * @return self
     * @param string $description
     */
    public function addToDescription($description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * @return string[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as unit
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\UnitType
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\UnitType $unit
     * @return self
     */
    public function setUnit(\GoetasWebservices\Client\UPS\Ifs\UnitType $unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as commodityCode
     *
     * @return string
     */
    public function getCommodityCode()
    {
        return $this->commodityCode;
    }

    /**
     * Sets a new commodityCode
     *
     * @param string $commodityCode
     * @return self
     */
    public function setCommodityCode($commodityCode)
    {
        $this->commodityCode = $commodityCode;
        return $this;
    }

    /**
     * Gets as partNumber
     *
     * @return string
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * Sets a new partNumber
     *
     * @param string $partNumber
     * @return self
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;
        return $this;
    }

    /**
     * Gets as originCountryCode
     *
     * @return string
     */
    public function getOriginCountryCode()
    {
        return $this->originCountryCode;
    }

    /**
     * Sets a new originCountryCode
     *
     * @param string $originCountryCode
     * @return self
     */
    public function setOriginCountryCode($originCountryCode)
    {
        $this->originCountryCode = $originCountryCode;
        return $this;
    }

    /**
     * Gets as jointProductionIndicator
     *
     * @return string
     */
    public function getJointProductionIndicator()
    {
        return $this->jointProductionIndicator;
    }

    /**
     * Sets a new jointProductionIndicator
     *
     * @param string $jointProductionIndicator
     * @return self
     */
    public function setJointProductionIndicator($jointProductionIndicator)
    {
        $this->jointProductionIndicator = $jointProductionIndicator;
        return $this;
    }

    /**
     * Gets as netCostCode
     *
     * @return string
     */
    public function getNetCostCode()
    {
        return $this->netCostCode;
    }

    /**
     * Sets a new netCostCode
     *
     * @param string $netCostCode
     * @return self
     */
    public function setNetCostCode($netCostCode)
    {
        $this->netCostCode = $netCostCode;
        return $this;
    }

    /**
     * Gets as netCostDateRange
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\NetCostDateType
     */
    public function getNetCostDateRange()
    {
        return $this->netCostDateRange;
    }

    /**
     * Sets a new netCostDateRange
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\NetCostDateType $netCostDateRange
     * @return self
     */
    public function setNetCostDateRange(\GoetasWebservices\Client\UPS\Ifs\NetCostDateType $netCostDateRange)
    {
        $this->netCostDateRange = $netCostDateRange;
        return $this;
    }

    /**
     * Gets as preferenceCriteria
     *
     * @return string
     */
    public function getPreferenceCriteria()
    {
        return $this->preferenceCriteria;
    }

    /**
     * Sets a new preferenceCriteria
     *
     * @param string $preferenceCriteria
     * @return self
     */
    public function setPreferenceCriteria($preferenceCriteria)
    {
        $this->preferenceCriteria = $preferenceCriteria;
        return $this;
    }

    /**
     * Gets as producerInfo
     *
     * @return string
     */
    public function getProducerInfo()
    {
        return $this->producerInfo;
    }

    /**
     * Sets a new producerInfo
     *
     * @param string $producerInfo
     * @return self
     */
    public function setProducerInfo($producerInfo)
    {
        $this->producerInfo = $producerInfo;
        return $this;
    }

    /**
     * Gets as marksAndNumbers
     *
     * @return string
     */
    public function getMarksAndNumbers()
    {
        return $this->marksAndNumbers;
    }

    /**
     * Sets a new marksAndNumbers
     *
     * @param string $marksAndNumbers
     * @return self
     */
    public function setMarksAndNumbers($marksAndNumbers)
    {
        $this->marksAndNumbers = $marksAndNumbers;
        return $this;
    }

    /**
     * Gets as numberOfPackagesPerCommodity
     *
     * @return string
     */
    public function getNumberOfPackagesPerCommodity()
    {
        return $this->numberOfPackagesPerCommodity;
    }

    /**
     * Sets a new numberOfPackagesPerCommodity
     *
     * @param string $numberOfPackagesPerCommodity
     * @return self
     */
    public function setNumberOfPackagesPerCommodity($numberOfPackagesPerCommodity)
    {
        $this->numberOfPackagesPerCommodity = $numberOfPackagesPerCommodity;
        return $this;
    }

    /**
     * Gets as productWeight
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\ProductWeightType
     */
    public function getProductWeight()
    {
        return $this->productWeight;
    }

    /**
     * Sets a new productWeight
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\ProductWeightType $productWeight
     * @return self
     */
    public function setProductWeight(\GoetasWebservices\Client\UPS\Ifs\ProductWeightType $productWeight)
    {
        $this->productWeight = $productWeight;
        return $this;
    }

    /**
     * Gets as vehicleID
     *
     * @return string
     */
    public function getVehicleID()
    {
        return $this->vehicleID;
    }

    /**
     * Sets a new vehicleID
     *
     * @param string $vehicleID
     * @return self
     */
    public function setVehicleID($vehicleID)
    {
        $this->vehicleID = $vehicleID;
        return $this;
    }

    /**
     * Gets as scheduleB
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\ScheduleBType
     */
    public function getScheduleB()
    {
        return $this->scheduleB;
    }

    /**
     * Sets a new scheduleB
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\ScheduleBType $scheduleB
     * @return self
     */
    public function setScheduleB(\GoetasWebservices\Client\UPS\Ifs\ScheduleBType $scheduleB)
    {
        $this->scheduleB = $scheduleB;
        return $this;
    }

    /**
     * Gets as exportType
     *
     * @return string
     */
    public function getExportType()
    {
        return $this->exportType;
    }

    /**
     * Sets a new exportType
     *
     * @param string $exportType
     * @return self
     */
    public function setExportType($exportType)
    {
        $this->exportType = $exportType;
        return $this;
    }

    /**
     * Gets as sEDTotalValue
     *
     * @return string
     */
    public function getSEDTotalValue()
    {
        return $this->sEDTotalValue;
    }

    /**
     * Sets a new sEDTotalValue
     *
     * @param string $sEDTotalValue
     * @return self
     */
    public function setSEDTotalValue($sEDTotalValue)
    {
        $this->sEDTotalValue = $sEDTotalValue;
        return $this;
    }

    /**
     * Adds as formType
     *
     * @return self
     * @param string $formType
     */
    public function addToExcludeFromForm($formType)
    {
        $this->excludeFromForm[] = $formType;
        return $this;
    }

    /**
     * isset excludeFromForm
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludeFromForm($index)
    {
        return isset($this->excludeFromForm[$index]);
    }

    /**
     * unset excludeFromForm
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludeFromForm($index)
    {
        unset($this->excludeFromForm[$index]);
    }

    /**
     * Gets as excludeFromForm
     *
     * @return string[]
     */
    public function getExcludeFromForm()
    {
        return $this->excludeFromForm;
    }

    /**
     * Sets a new excludeFromForm
     *
     * @param string[] $excludeFromForm
     * @return self
     */
    public function setExcludeFromForm(array $excludeFromForm)
    {
        $this->excludeFromForm = $excludeFromForm;
        return $this;
    }

    /**
     * Gets as productCurrencyCode
     *
     * @return string
     */
    public function getProductCurrencyCode()
    {
        return $this->productCurrencyCode;
    }

    /**
     * Sets a new productCurrencyCode
     *
     * @param string $productCurrencyCode
     * @return self
     */
    public function setProductCurrencyCode($productCurrencyCode)
    {
        $this->productCurrencyCode = $productCurrencyCode;
        return $this;
    }

    /**
     * Adds as packageAssociated
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ifs\PackageAssociatedType $packageAssociated
     */
    public function addToPackingListInfo(\GoetasWebservices\Client\UPS\Ifs\PackageAssociatedType $packageAssociated)
    {
        $this->packingListInfo[] = $packageAssociated;
        return $this;
    }

    /**
     * isset packingListInfo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackingListInfo($index)
    {
        return isset($this->packingListInfo[$index]);
    }

    /**
     * unset packingListInfo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackingListInfo($index)
    {
        unset($this->packingListInfo[$index]);
    }

    /**
     * Gets as packingListInfo
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\PackageAssociatedType[]
     */
    public function getPackingListInfo()
    {
        return $this->packingListInfo;
    }

    /**
     * Sets a new packingListInfo
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\PackageAssociatedType[] $packingListInfo
     * @return self
     */
    public function setPackingListInfo(array $packingListInfo)
    {
        $this->packingListInfo = $packingListInfo;
        return $this;
    }

    /**
     * Gets as eEIInformation
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\EEIInformationType
     */
    public function getEEIInformation()
    {
        return $this->eEIInformation;
    }

    /**
     * Sets a new eEIInformation
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\EEIInformationType $eEIInformation
     * @return self
     */
    public function setEEIInformation(\GoetasWebservices\Client\UPS\Ifs\EEIInformationType $eEIInformation)
    {
        $this->eEIInformation = $eEIInformation;
        return $this;
    }


}

