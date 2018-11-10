<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing UPSPremiumCareFormType
 *
 *
 * XSD Type: UPSPremiumCareFormType
 */
class UPSPremiumCareFormType
{

    /**
     * @property string $shipmentDate
     */
    private $shipmentDate = null;

    /**
     * @property string $pageSize
     */
    private $pageSize = null;

    /**
     * @property string $printType
     */
    private $printType = null;

    /**
     * @property string $numOfCopies
     */
    private $numOfCopies = null;

    /**
     * @property string[] $languageForUPSPremiumCare
     */
    private $languageForUPSPremiumCare = null;

    /**
     * Gets as shipmentDate
     *
     * @return string
     */
    public function getShipmentDate()
    {
        return $this->shipmentDate;
    }

    /**
     * Sets a new shipmentDate
     *
     * @param string $shipmentDate
     * @return self
     */
    public function setShipmentDate($shipmentDate)
    {
        $this->shipmentDate = $shipmentDate;
        return $this;
    }

    /**
     * Gets as pageSize
     *
     * @return string
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * Sets a new pageSize
     *
     * @param string $pageSize
     * @return self
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * Gets as printType
     *
     * @return string
     */
    public function getPrintType()
    {
        return $this->printType;
    }

    /**
     * Sets a new printType
     *
     * @param string $printType
     * @return self
     */
    public function setPrintType($printType)
    {
        $this->printType = $printType;
        return $this;
    }

    /**
     * Gets as numOfCopies
     *
     * @return string
     */
    public function getNumOfCopies()
    {
        return $this->numOfCopies;
    }

    /**
     * Sets a new numOfCopies
     *
     * @param string $numOfCopies
     * @return self
     */
    public function setNumOfCopies($numOfCopies)
    {
        $this->numOfCopies = $numOfCopies;
        return $this;
    }

    /**
     * Adds as language
     *
     * @return self
     * @param string $language
     */
    public function addToLanguageForUPSPremiumCare($language)
    {
        $this->languageForUPSPremiumCare[] = $language;
        return $this;
    }

    /**
     * isset languageForUPSPremiumCare
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguageForUPSPremiumCare($index)
    {
        return isset($this->languageForUPSPremiumCare[$index]);
    }

    /**
     * unset languageForUPSPremiumCare
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguageForUPSPremiumCare($index)
    {
        unset($this->languageForUPSPremiumCare[$index]);
    }

    /**
     * Gets as languageForUPSPremiumCare
     *
     * @return string[]
     */
    public function getLanguageForUPSPremiumCare()
    {
        return $this->languageForUPSPremiumCare;
    }

    /**
     * Sets a new languageForUPSPremiumCare
     *
     * @param string[] $languageForUPSPremiumCare
     * @return self
     */
    public function setLanguageForUPSPremiumCare(array $languageForUPSPremiumCare)
    {
        $this->languageForUPSPremiumCare = $languageForUPSPremiumCare;
        return $this;
    }


}

