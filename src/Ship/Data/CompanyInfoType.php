<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing CompanyInfoType
 *
 *
 * XSD Type: CompanyInfoType
 */
class CompanyInfoType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $attentionName
     */
    private $attentionName = null;

    /**
     * @property string $companyDisplayableName
     */
    private $companyDisplayableName = null;

    /**
     * @property string $taxIdentificationNumber
     */
    private $taxIdentificationNumber = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\TaxIDCodeDescType $taxIDType
     */
    private $taxIDType = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipPhoneType $phone
     */
    private $phone = null;

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as attentionName
     *
     * @return string
     */
    public function getAttentionName()
    {
        return $this->attentionName;
    }

    /**
     * Sets a new attentionName
     *
     * @param string $attentionName
     * @return self
     */
    public function setAttentionName($attentionName)
    {
        $this->attentionName = $attentionName;
        return $this;
    }

    /**
     * Gets as companyDisplayableName
     *
     * @return string
     */
    public function getCompanyDisplayableName()
    {
        return $this->companyDisplayableName;
    }

    /**
     * Sets a new companyDisplayableName
     *
     * @param string $companyDisplayableName
     * @return self
     */
    public function setCompanyDisplayableName($companyDisplayableName)
    {
        $this->companyDisplayableName = $companyDisplayableName;
        return $this;
    }

    /**
     * Gets as taxIdentificationNumber
     *
     * @return string
     */
    public function getTaxIdentificationNumber()
    {
        return $this->taxIdentificationNumber;
    }

    /**
     * Sets a new taxIdentificationNumber
     *
     * @param string $taxIdentificationNumber
     * @return self
     */
    public function setTaxIdentificationNumber($taxIdentificationNumber)
    {
        $this->taxIdentificationNumber = $taxIdentificationNumber;
        return $this;
    }

    /**
     * Gets as taxIDType
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\TaxIDCodeDescType
     */
    public function getTaxIDType()
    {
        return $this->taxIDType;
    }

    /**
     * Sets a new taxIDType
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\TaxIDCodeDescType $taxIDType
     * @return self
     */
    public function setTaxIDType(\GoetasWebservices\Client\UPS\Ship\Data\TaxIDCodeDescType $taxIDType)
    {
        $this->taxIDType = $taxIDType;
        return $this;
    }

    /**
     * Gets as phone
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipPhoneType
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipPhoneType $phone
     * @return self
     */
    public function setPhone(\GoetasWebservices\Client\UPS\Ship\Data\ShipPhoneType $phone)
    {
        $this->phone = $phone;
        return $this;
    }


}

