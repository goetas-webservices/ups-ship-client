<?php

namespace GoetasWebservices\Client\UPS\Error;

/**
 * Class representing ErrorDetailType
 *
 *
 * XSD Type: ErrorDetailType
 */
class ErrorDetailType
{

    /**
     * @property string $severity
     */
    private $severity = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Error\CodeType $primaryErrorCode
     */
    private $primaryErrorCode = null;

    /**
     * @property string $minimumRetrySeconds
     */
    private $minimumRetrySeconds = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Error\LocationType $location
     */
    private $location = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Error\CodeType[] $subErrorCode
     */
    private $subErrorCode = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\UPS\Error\AdditionalInfoType[] $additionalInformation
     */
    private $additionalInformation = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\UPS\Error\ElementLevelInformationType $elementLevelInformation
     */
    private $elementLevelInformation = null;

    /**
     * Gets as severity
     *
     * @return string
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Sets a new severity
     *
     * @param string $severity
     * @return self
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Gets as primaryErrorCode
     *
     * @return \GoetasWebservices\Client\UPS\Error\CodeType
     */
    public function getPrimaryErrorCode()
    {
        return $this->primaryErrorCode;
    }

    /**
     * Sets a new primaryErrorCode
     *
     * @param \GoetasWebservices\Client\UPS\Error\CodeType $primaryErrorCode
     * @return self
     */
    public function setPrimaryErrorCode(\GoetasWebservices\Client\UPS\Error\CodeType $primaryErrorCode)
    {
        $this->primaryErrorCode = $primaryErrorCode;
        return $this;
    }

    /**
     * Gets as minimumRetrySeconds
     *
     * @return string
     */
    public function getMinimumRetrySeconds()
    {
        return $this->minimumRetrySeconds;
    }

    /**
     * Sets a new minimumRetrySeconds
     *
     * @param string $minimumRetrySeconds
     * @return self
     */
    public function setMinimumRetrySeconds($minimumRetrySeconds)
    {
        $this->minimumRetrySeconds = $minimumRetrySeconds;
        return $this;
    }

    /**
     * Gets as location
     *
     * @return \GoetasWebservices\Client\UPS\Error\LocationType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * @param \GoetasWebservices\Client\UPS\Error\LocationType $location
     * @return self
     */
    public function setLocation(\GoetasWebservices\Client\UPS\Error\LocationType $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as subErrorCode
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Error\CodeType $subErrorCode
     */
    public function addToSubErrorCode(\GoetasWebservices\Client\UPS\Error\CodeType $subErrorCode)
    {
        $this->subErrorCode[] = $subErrorCode;
        return $this;
    }

    /**
     * isset subErrorCode
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubErrorCode($index)
    {
        return isset($this->subErrorCode[$index]);
    }

    /**
     * unset subErrorCode
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubErrorCode($index)
    {
        unset($this->subErrorCode[$index]);
    }

    /**
     * Gets as subErrorCode
     *
     * @return \GoetasWebservices\Client\UPS\Error\CodeType[]
     */
    public function getSubErrorCode()
    {
        return $this->subErrorCode;
    }

    /**
     * Sets a new subErrorCode
     *
     * @param \GoetasWebservices\Client\UPS\Error\CodeType[] $subErrorCode
     * @return self
     */
    public function setSubErrorCode(array $subErrorCode)
    {
        $this->subErrorCode = $subErrorCode;
        return $this;
    }

    /**
     * Adds as additionalInformation
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Error\AdditionalInfoType $additionalInformation
     */
    public function addToAdditionalInformation(\GoetasWebservices\Client\UPS\Error\AdditionalInfoType $additionalInformation)
    {
        $this->additionalInformation[] = $additionalInformation;
        return $this;
    }

    /**
     * isset additionalInformation
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalInformation($index)
    {
        return isset($this->additionalInformation[$index]);
    }

    /**
     * unset additionalInformation
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalInformation($index)
    {
        unset($this->additionalInformation[$index]);
    }

    /**
     * Gets as additionalInformation
     *
     * @return \GoetasWebservices\Client\UPS\Error\AdditionalInfoType[]
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * Sets a new additionalInformation
     *
     * @param \GoetasWebservices\Client\UPS\Error\AdditionalInfoType[] $additionalInformation
     * @return self
     */
    public function setAdditionalInformation(array $additionalInformation)
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }

    /**
     * Gets as elementLevelInformation
     *
     * @return \GoetasWebservices\Client\UPS\Error\ElementLevelInformationType
     */
    public function getElementLevelInformation()
    {
        return $this->elementLevelInformation;
    }

    /**
     * Sets a new elementLevelInformation
     *
     * @param \GoetasWebservices\Client\UPS\Error\ElementLevelInformationType $elementLevelInformation
     * @return self
     */
    public function setElementLevelInformation(\GoetasWebservices\Client\UPS\Error\ElementLevelInformationType $elementLevelInformation)
    {
        $this->elementLevelInformation = $elementLevelInformation;
        return $this;
    }


}

