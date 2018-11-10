<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing PackageType
 *
 *
 * XSD Type: PackageType
 */
class PackageType
{

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\PackagingType $packaging
     */
    private $packaging = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\DimensionsType $dimensions
     */
    private $dimensions = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\PackageWeightType $dimWeight
     */
    private $dimWeight = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\PackageWeightType $packageWeight
     */
    private $packageWeight = null;

    /**
     * @property string $largePackageIndicator
     */
    private $largePackageIndicator = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ReferenceNumberType[] $referenceNumber
     */
    private $referenceNumber = [
        
    ];

    /**
     * @property string $additionalHandlingIndicator
     */
    private $additionalHandlingIndicator = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\PackageServiceOptionsType $packageServiceOptions
     */
    private $packageServiceOptions = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\CommodityType $commodity
     */
    private $commodity = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\HazMatPackageInformationType $hazMatPackageInformation
     */
    private $hazMatPackageInformation = null;

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as packaging
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\PackagingType
     */
    public function getPackaging()
    {
        return $this->packaging;
    }

    /**
     * Sets a new packaging
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\PackagingType $packaging
     * @return self
     */
    public function setPackaging(\GoetasWebservices\Client\UPS\Ship\Data\PackagingType $packaging)
    {
        $this->packaging = $packaging;
        return $this;
    }

    /**
     * Gets as dimensions
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\DimensionsType
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * Sets a new dimensions
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\DimensionsType $dimensions
     * @return self
     */
    public function setDimensions(\GoetasWebservices\Client\UPS\Ship\Data\DimensionsType $dimensions)
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * Gets as dimWeight
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\PackageWeightType
     */
    public function getDimWeight()
    {
        return $this->dimWeight;
    }

    /**
     * Sets a new dimWeight
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\PackageWeightType $dimWeight
     * @return self
     */
    public function setDimWeight(\GoetasWebservices\Client\UPS\Ship\Data\PackageWeightType $dimWeight)
    {
        $this->dimWeight = $dimWeight;
        return $this;
    }

    /**
     * Gets as packageWeight
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\PackageWeightType
     */
    public function getPackageWeight()
    {
        return $this->packageWeight;
    }

    /**
     * Sets a new packageWeight
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\PackageWeightType $packageWeight
     * @return self
     */
    public function setPackageWeight(\GoetasWebservices\Client\UPS\Ship\Data\PackageWeightType $packageWeight)
    {
        $this->packageWeight = $packageWeight;
        return $this;
    }

    /**
     * Gets as largePackageIndicator
     *
     * @return string
     */
    public function getLargePackageIndicator()
    {
        return $this->largePackageIndicator;
    }

    /**
     * Sets a new largePackageIndicator
     *
     * @param string $largePackageIndicator
     * @return self
     */
    public function setLargePackageIndicator($largePackageIndicator)
    {
        $this->largePackageIndicator = $largePackageIndicator;
        return $this;
    }

    /**
     * Adds as referenceNumber
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ReferenceNumberType $referenceNumber
     */
    public function addToReferenceNumber(\GoetasWebservices\Client\UPS\Ship\Data\ReferenceNumberType $referenceNumber)
    {
        $this->referenceNumber[] = $referenceNumber;
        return $this;
    }

    /**
     * isset referenceNumber
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferenceNumber($index)
    {
        return isset($this->referenceNumber[$index]);
    }

    /**
     * unset referenceNumber
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferenceNumber($index)
    {
        unset($this->referenceNumber[$index]);
    }

    /**
     * Gets as referenceNumber
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ReferenceNumberType[]
     */
    public function getReferenceNumber()
    {
        return $this->referenceNumber;
    }

    /**
     * Sets a new referenceNumber
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ReferenceNumberType[] $referenceNumber
     * @return self
     */
    public function setReferenceNumber(array $referenceNumber)
    {
        $this->referenceNumber = $referenceNumber;
        return $this;
    }

    /**
     * Gets as additionalHandlingIndicator
     *
     * @return string
     */
    public function getAdditionalHandlingIndicator()
    {
        return $this->additionalHandlingIndicator;
    }

    /**
     * Sets a new additionalHandlingIndicator
     *
     * @param string $additionalHandlingIndicator
     * @return self
     */
    public function setAdditionalHandlingIndicator($additionalHandlingIndicator)
    {
        $this->additionalHandlingIndicator = $additionalHandlingIndicator;
        return $this;
    }

    /**
     * Gets as packageServiceOptions
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\PackageServiceOptionsType
     */
    public function getPackageServiceOptions()
    {
        return $this->packageServiceOptions;
    }

    /**
     * Sets a new packageServiceOptions
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\PackageServiceOptionsType $packageServiceOptions
     * @return self
     */
    public function setPackageServiceOptions(\GoetasWebservices\Client\UPS\Ship\Data\PackageServiceOptionsType $packageServiceOptions)
    {
        $this->packageServiceOptions = $packageServiceOptions;
        return $this;
    }

    /**
     * Gets as commodity
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\CommodityType
     */
    public function getCommodity()
    {
        return $this->commodity;
    }

    /**
     * Sets a new commodity
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\CommodityType $commodity
     * @return self
     */
    public function setCommodity(\GoetasWebservices\Client\UPS\Ship\Data\CommodityType $commodity)
    {
        $this->commodity = $commodity;
        return $this;
    }

    /**
     * Gets as hazMatPackageInformation
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\HazMatPackageInformationType
     */
    public function getHazMatPackageInformation()
    {
        return $this->hazMatPackageInformation;
    }

    /**
     * Sets a new hazMatPackageInformation
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\HazMatPackageInformationType $hazMatPackageInformation
     * @return self
     */
    public function setHazMatPackageInformation(\GoetasWebservices\Client\UPS\Ship\Data\HazMatPackageInformationType $hazMatPackageInformation)
    {
        $this->hazMatPackageInformation = $hazMatPackageInformation;
        return $this;
    }


}

