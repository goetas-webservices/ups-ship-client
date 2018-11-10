<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing InternationalFormType
 *
 *
 * XSD Type: InternationalFormType
 */
class InternationalFormType
{

    /**
     * @property string[] $formType
     */
    private $formType = [
        
    ];

    /**
     * @property string[] $userCreatedForm
     */
    private $userCreatedForm = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\CN22FormType $cN22Form
     */
    private $cN22Form = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\UPSPremiumCareFormType $uPSPremiumCareForm
     */
    private $uPSPremiumCareForm = null;

    /**
     * @property string $additionalDocumentIndicator
     */
    private $additionalDocumentIndicator = null;

    /**
     * @property string $formGroupIdName
     */
    private $formGroupIdName = null;

    /**
     * @property string $sEDFilingOption
     */
    private $sEDFilingOption = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\EEIFilingOptionType $eEIFilingOption
     */
    private $eEIFilingOption = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\ContactType $contacts
     */
    private $contacts = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\ProductType[] $product
     */
    private $product = [
        
    ];

    /**
     * @property string $invoiceNumber
     */
    private $invoiceNumber = null;

    /**
     * @property string $invoiceDate
     */
    private $invoiceDate = null;

    /**
     * @property string $purchaseOrderNumber
     */
    private $purchaseOrderNumber = null;

    /**
     * @property string $termsOfShipment
     */
    private $termsOfShipment = null;

    /**
     * @property string $reasonForExport
     */
    private $reasonForExport = null;

    /**
     * @property string $comments
     */
    private $comments = null;

    /**
     * @property string $declarationStatement
     */
    private $declarationStatement = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\IFChargesType $discount
     */
    private $discount = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\IFChargesType $freightCharges
     */
    private $freightCharges = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\IFChargesType $insuranceCharges
     */
    private $insuranceCharges = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\OtherChargesType $otherCharges
     */
    private $otherCharges = null;

    /**
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\BlanketPeriodType $blanketPeriod
     */
    private $blanketPeriod = null;

    /**
     * @property string $exportDate
     */
    private $exportDate = null;

    /**
     * @property string $exportingCarrier
     */
    private $exportingCarrier = null;

    /**
     * @property string $carrierID
     */
    private $carrierID = null;

    /**
     * @property string $inBondCode
     */
    private $inBondCode = null;

    /**
     * @property string $entryNumber
     */
    private $entryNumber = null;

    /**
     * @property string $pointOfOrigin
     */
    private $pointOfOrigin = null;

    /**
     * @property string $pointOfOriginType
     */
    private $pointOfOriginType = null;

    /**
     * @property string $modeOfTransport
     */
    private $modeOfTransport = null;

    /**
     * @property string $portOfExport
     */
    private $portOfExport = null;

    /**
     * @property string $portOfUnloading
     */
    private $portOfUnloading = null;

    /**
     * @property string $loadingPier
     */
    private $loadingPier = null;

    /**
     * @property string $partiesToTransaction
     */
    private $partiesToTransaction = null;

    /**
     * @property string $routedExportTransactionIndicator
     */
    private $routedExportTransactionIndicator = null;

    /**
     * @property string $containerizedIndicator
     */
    private $containerizedIndicator = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\LicenseType $license
     */
    private $license = null;

    /**
     * @property string $eCCNNumber
     */
    private $eCCNNumber = null;

    /**
     * @property string $overridePaperlessIndicator
     */
    private $overridePaperlessIndicator = null;

    /**
     * @property string $shipperMemo
     */
    private $shipperMemo = null;

    /**
     * @property string $multiCurrencyInvoiceLineTotal
     */
    private $multiCurrencyInvoiceLineTotal = null;

    /**
     * @property string $hazardousMaterialsIndicator
     */
    private $hazardousMaterialsIndicator = null;

    /**
     * Adds as formType
     *
     * @return self
     * @param string $formType
     */
    public function addToFormType($formType)
    {
        $this->formType[] = $formType;
        return $this;
    }

    /**
     * isset formType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFormType($index)
    {
        return isset($this->formType[$index]);
    }

    /**
     * unset formType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFormType($index)
    {
        unset($this->formType[$index]);
    }

    /**
     * Gets as formType
     *
     * @return string[]
     */
    public function getFormType()
    {
        return $this->formType;
    }

    /**
     * Sets a new formType
     *
     * @param string[] $formType
     * @return self
     */
    public function setFormType(array $formType)
    {
        $this->formType = $formType;
        return $this;
    }

    /**
     * Adds as documentID
     *
     * @return self
     * @param string $documentID
     */
    public function addToUserCreatedForm($documentID)
    {
        $this->userCreatedForm[] = $documentID;
        return $this;
    }

    /**
     * isset userCreatedForm
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserCreatedForm($index)
    {
        return isset($this->userCreatedForm[$index]);
    }

    /**
     * unset userCreatedForm
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserCreatedForm($index)
    {
        unset($this->userCreatedForm[$index]);
    }

    /**
     * Gets as userCreatedForm
     *
     * @return string[]
     */
    public function getUserCreatedForm()
    {
        return $this->userCreatedForm;
    }

    /**
     * Sets a new userCreatedForm
     *
     * @param string[] $userCreatedForm
     * @return self
     */
    public function setUserCreatedForm(array $userCreatedForm)
    {
        $this->userCreatedForm = $userCreatedForm;
        return $this;
    }

    /**
     * Gets as cN22Form
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\CN22FormType
     */
    public function getCN22Form()
    {
        return $this->cN22Form;
    }

    /**
     * Sets a new cN22Form
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\CN22FormType $cN22Form
     * @return self
     */
    public function setCN22Form(\GoetasWebservices\Client\UPS\Ifs\CN22FormType $cN22Form)
    {
        $this->cN22Form = $cN22Form;
        return $this;
    }

    /**
     * Gets as uPSPremiumCareForm
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\UPSPremiumCareFormType
     */
    public function getUPSPremiumCareForm()
    {
        return $this->uPSPremiumCareForm;
    }

    /**
     * Sets a new uPSPremiumCareForm
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\UPSPremiumCareFormType $uPSPremiumCareForm
     * @return self
     */
    public function setUPSPremiumCareForm(\GoetasWebservices\Client\UPS\Ifs\UPSPremiumCareFormType $uPSPremiumCareForm)
    {
        $this->uPSPremiumCareForm = $uPSPremiumCareForm;
        return $this;
    }

    /**
     * Gets as additionalDocumentIndicator
     *
     * @return string
     */
    public function getAdditionalDocumentIndicator()
    {
        return $this->additionalDocumentIndicator;
    }

    /**
     * Sets a new additionalDocumentIndicator
     *
     * @param string $additionalDocumentIndicator
     * @return self
     */
    public function setAdditionalDocumentIndicator($additionalDocumentIndicator)
    {
        $this->additionalDocumentIndicator = $additionalDocumentIndicator;
        return $this;
    }

    /**
     * Gets as formGroupIdName
     *
     * @return string
     */
    public function getFormGroupIdName()
    {
        return $this->formGroupIdName;
    }

    /**
     * Sets a new formGroupIdName
     *
     * @param string $formGroupIdName
     * @return self
     */
    public function setFormGroupIdName($formGroupIdName)
    {
        $this->formGroupIdName = $formGroupIdName;
        return $this;
    }

    /**
     * Gets as sEDFilingOption
     *
     * @return string
     */
    public function getSEDFilingOption()
    {
        return $this->sEDFilingOption;
    }

    /**
     * Sets a new sEDFilingOption
     *
     * @param string $sEDFilingOption
     * @return self
     */
    public function setSEDFilingOption($sEDFilingOption)
    {
        $this->sEDFilingOption = $sEDFilingOption;
        return $this;
    }

    /**
     * Gets as eEIFilingOption
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\EEIFilingOptionType
     */
    public function getEEIFilingOption()
    {
        return $this->eEIFilingOption;
    }

    /**
     * Sets a new eEIFilingOption
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\EEIFilingOptionType $eEIFilingOption
     * @return self
     */
    public function setEEIFilingOption(\GoetasWebservices\Client\UPS\Ifs\EEIFilingOptionType $eEIFilingOption)
    {
        $this->eEIFilingOption = $eEIFilingOption;
        return $this;
    }

    /**
     * Gets as contacts
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\ContactType
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\ContactType $contacts
     * @return self
     */
    public function setContacts(\GoetasWebservices\Client\UPS\Ifs\ContactType $contacts)
    {
        $this->contacts = $contacts;
        return $this;
    }

    /**
     * Adds as product
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ifs\ProductType $product
     */
    public function addToProduct(\GoetasWebservices\Client\UPS\Ifs\ProductType $product)
    {
        $this->product[] = $product;
        return $this;
    }

    /**
     * isset product
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProduct($index)
    {
        return isset($this->product[$index]);
    }

    /**
     * unset product
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProduct($index)
    {
        unset($this->product[$index]);
    }

    /**
     * Gets as product
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\ProductType[]
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\ProductType[] $product
     * @return self
     */
    public function setProduct(array $product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Gets as invoiceNumber
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * Sets a new invoiceNumber
     *
     * @param string $invoiceNumber
     * @return self
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    /**
     * Gets as invoiceDate
     *
     * @return string
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * Sets a new invoiceDate
     *
     * @param string $invoiceDate
     * @return self
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }

    /**
     * Gets as purchaseOrderNumber
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->purchaseOrderNumber;
    }

    /**
     * Sets a new purchaseOrderNumber
     *
     * @param string $purchaseOrderNumber
     * @return self
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->purchaseOrderNumber = $purchaseOrderNumber;
        return $this;
    }

    /**
     * Gets as termsOfShipment
     *
     * @return string
     */
    public function getTermsOfShipment()
    {
        return $this->termsOfShipment;
    }

    /**
     * Sets a new termsOfShipment
     *
     * @param string $termsOfShipment
     * @return self
     */
    public function setTermsOfShipment($termsOfShipment)
    {
        $this->termsOfShipment = $termsOfShipment;
        return $this;
    }

    /**
     * Gets as reasonForExport
     *
     * @return string
     */
    public function getReasonForExport()
    {
        return $this->reasonForExport;
    }

    /**
     * Sets a new reasonForExport
     *
     * @param string $reasonForExport
     * @return self
     */
    public function setReasonForExport($reasonForExport)
    {
        $this->reasonForExport = $reasonForExport;
        return $this;
    }

    /**
     * Gets as comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * @param string $comments
     * @return self
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Gets as declarationStatement
     *
     * @return string
     */
    public function getDeclarationStatement()
    {
        return $this->declarationStatement;
    }

    /**
     * Sets a new declarationStatement
     *
     * @param string $declarationStatement
     * @return self
     */
    public function setDeclarationStatement($declarationStatement)
    {
        $this->declarationStatement = $declarationStatement;
        return $this;
    }

    /**
     * Gets as discount
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\IFChargesType
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\IFChargesType $discount
     * @return self
     */
    public function setDiscount(\GoetasWebservices\Client\UPS\Ifs\IFChargesType $discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * Gets as freightCharges
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\IFChargesType
     */
    public function getFreightCharges()
    {
        return $this->freightCharges;
    }

    /**
     * Sets a new freightCharges
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\IFChargesType $freightCharges
     * @return self
     */
    public function setFreightCharges(\GoetasWebservices\Client\UPS\Ifs\IFChargesType $freightCharges)
    {
        $this->freightCharges = $freightCharges;
        return $this;
    }

    /**
     * Gets as insuranceCharges
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\IFChargesType
     */
    public function getInsuranceCharges()
    {
        return $this->insuranceCharges;
    }

    /**
     * Sets a new insuranceCharges
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\IFChargesType $insuranceCharges
     * @return self
     */
    public function setInsuranceCharges(\GoetasWebservices\Client\UPS\Ifs\IFChargesType $insuranceCharges)
    {
        $this->insuranceCharges = $insuranceCharges;
        return $this;
    }

    /**
     * Gets as otherCharges
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\OtherChargesType
     */
    public function getOtherCharges()
    {
        return $this->otherCharges;
    }

    /**
     * Sets a new otherCharges
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\OtherChargesType $otherCharges
     * @return self
     */
    public function setOtherCharges(\GoetasWebservices\Client\UPS\Ifs\OtherChargesType $otherCharges)
    {
        $this->otherCharges = $otherCharges;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as blanketPeriod
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\BlanketPeriodType
     */
    public function getBlanketPeriod()
    {
        return $this->blanketPeriod;
    }

    /**
     * Sets a new blanketPeriod
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\BlanketPeriodType $blanketPeriod
     * @return self
     */
    public function setBlanketPeriod(\GoetasWebservices\Client\UPS\Ifs\BlanketPeriodType $blanketPeriod)
    {
        $this->blanketPeriod = $blanketPeriod;
        return $this;
    }

    /**
     * Gets as exportDate
     *
     * @return string
     */
    public function getExportDate()
    {
        return $this->exportDate;
    }

    /**
     * Sets a new exportDate
     *
     * @param string $exportDate
     * @return self
     */
    public function setExportDate($exportDate)
    {
        $this->exportDate = $exportDate;
        return $this;
    }

    /**
     * Gets as exportingCarrier
     *
     * @return string
     */
    public function getExportingCarrier()
    {
        return $this->exportingCarrier;
    }

    /**
     * Sets a new exportingCarrier
     *
     * @param string $exportingCarrier
     * @return self
     */
    public function setExportingCarrier($exportingCarrier)
    {
        $this->exportingCarrier = $exportingCarrier;
        return $this;
    }

    /**
     * Gets as carrierID
     *
     * @return string
     */
    public function getCarrierID()
    {
        return $this->carrierID;
    }

    /**
     * Sets a new carrierID
     *
     * @param string $carrierID
     * @return self
     */
    public function setCarrierID($carrierID)
    {
        $this->carrierID = $carrierID;
        return $this;
    }

    /**
     * Gets as inBondCode
     *
     * @return string
     */
    public function getInBondCode()
    {
        return $this->inBondCode;
    }

    /**
     * Sets a new inBondCode
     *
     * @param string $inBondCode
     * @return self
     */
    public function setInBondCode($inBondCode)
    {
        $this->inBondCode = $inBondCode;
        return $this;
    }

    /**
     * Gets as entryNumber
     *
     * @return string
     */
    public function getEntryNumber()
    {
        return $this->entryNumber;
    }

    /**
     * Sets a new entryNumber
     *
     * @param string $entryNumber
     * @return self
     */
    public function setEntryNumber($entryNumber)
    {
        $this->entryNumber = $entryNumber;
        return $this;
    }

    /**
     * Gets as pointOfOrigin
     *
     * @return string
     */
    public function getPointOfOrigin()
    {
        return $this->pointOfOrigin;
    }

    /**
     * Sets a new pointOfOrigin
     *
     * @param string $pointOfOrigin
     * @return self
     */
    public function setPointOfOrigin($pointOfOrigin)
    {
        $this->pointOfOrigin = $pointOfOrigin;
        return $this;
    }

    /**
     * Gets as pointOfOriginType
     *
     * @return string
     */
    public function getPointOfOriginType()
    {
        return $this->pointOfOriginType;
    }

    /**
     * Sets a new pointOfOriginType
     *
     * @param string $pointOfOriginType
     * @return self
     */
    public function setPointOfOriginType($pointOfOriginType)
    {
        $this->pointOfOriginType = $pointOfOriginType;
        return $this;
    }

    /**
     * Gets as modeOfTransport
     *
     * @return string
     */
    public function getModeOfTransport()
    {
        return $this->modeOfTransport;
    }

    /**
     * Sets a new modeOfTransport
     *
     * @param string $modeOfTransport
     * @return self
     */
    public function setModeOfTransport($modeOfTransport)
    {
        $this->modeOfTransport = $modeOfTransport;
        return $this;
    }

    /**
     * Gets as portOfExport
     *
     * @return string
     */
    public function getPortOfExport()
    {
        return $this->portOfExport;
    }

    /**
     * Sets a new portOfExport
     *
     * @param string $portOfExport
     * @return self
     */
    public function setPortOfExport($portOfExport)
    {
        $this->portOfExport = $portOfExport;
        return $this;
    }

    /**
     * Gets as portOfUnloading
     *
     * @return string
     */
    public function getPortOfUnloading()
    {
        return $this->portOfUnloading;
    }

    /**
     * Sets a new portOfUnloading
     *
     * @param string $portOfUnloading
     * @return self
     */
    public function setPortOfUnloading($portOfUnloading)
    {
        $this->portOfUnloading = $portOfUnloading;
        return $this;
    }

    /**
     * Gets as loadingPier
     *
     * @return string
     */
    public function getLoadingPier()
    {
        return $this->loadingPier;
    }

    /**
     * Sets a new loadingPier
     *
     * @param string $loadingPier
     * @return self
     */
    public function setLoadingPier($loadingPier)
    {
        $this->loadingPier = $loadingPier;
        return $this;
    }

    /**
     * Gets as partiesToTransaction
     *
     * @return string
     */
    public function getPartiesToTransaction()
    {
        return $this->partiesToTransaction;
    }

    /**
     * Sets a new partiesToTransaction
     *
     * @param string $partiesToTransaction
     * @return self
     */
    public function setPartiesToTransaction($partiesToTransaction)
    {
        $this->partiesToTransaction = $partiesToTransaction;
        return $this;
    }

    /**
     * Gets as routedExportTransactionIndicator
     *
     * @return string
     */
    public function getRoutedExportTransactionIndicator()
    {
        return $this->routedExportTransactionIndicator;
    }

    /**
     * Sets a new routedExportTransactionIndicator
     *
     * @param string $routedExportTransactionIndicator
     * @return self
     */
    public function setRoutedExportTransactionIndicator($routedExportTransactionIndicator)
    {
        $this->routedExportTransactionIndicator = $routedExportTransactionIndicator;
        return $this;
    }

    /**
     * Gets as containerizedIndicator
     *
     * @return string
     */
    public function getContainerizedIndicator()
    {
        return $this->containerizedIndicator;
    }

    /**
     * Sets a new containerizedIndicator
     *
     * @param string $containerizedIndicator
     * @return self
     */
    public function setContainerizedIndicator($containerizedIndicator)
    {
        $this->containerizedIndicator = $containerizedIndicator;
        return $this;
    }

    /**
     * Gets as license
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\LicenseType
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Sets a new license
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\LicenseType $license
     * @return self
     */
    public function setLicense(\GoetasWebservices\Client\UPS\Ifs\LicenseType $license)
    {
        $this->license = $license;
        return $this;
    }

    /**
     * Gets as eCCNNumber
     *
     * @return string
     */
    public function getECCNNumber()
    {
        return $this->eCCNNumber;
    }

    /**
     * Sets a new eCCNNumber
     *
     * @param string $eCCNNumber
     * @return self
     */
    public function setECCNNumber($eCCNNumber)
    {
        $this->eCCNNumber = $eCCNNumber;
        return $this;
    }

    /**
     * Gets as overridePaperlessIndicator
     *
     * @return string
     */
    public function getOverridePaperlessIndicator()
    {
        return $this->overridePaperlessIndicator;
    }

    /**
     * Sets a new overridePaperlessIndicator
     *
     * @param string $overridePaperlessIndicator
     * @return self
     */
    public function setOverridePaperlessIndicator($overridePaperlessIndicator)
    {
        $this->overridePaperlessIndicator = $overridePaperlessIndicator;
        return $this;
    }

    /**
     * Gets as shipperMemo
     *
     * @return string
     */
    public function getShipperMemo()
    {
        return $this->shipperMemo;
    }

    /**
     * Sets a new shipperMemo
     *
     * @param string $shipperMemo
     * @return self
     */
    public function setShipperMemo($shipperMemo)
    {
        $this->shipperMemo = $shipperMemo;
        return $this;
    }

    /**
     * Gets as multiCurrencyInvoiceLineTotal
     *
     * @return string
     */
    public function getMultiCurrencyInvoiceLineTotal()
    {
        return $this->multiCurrencyInvoiceLineTotal;
    }

    /**
     * Sets a new multiCurrencyInvoiceLineTotal
     *
     * @param string $multiCurrencyInvoiceLineTotal
     * @return self
     */
    public function setMultiCurrencyInvoiceLineTotal($multiCurrencyInvoiceLineTotal)
    {
        $this->multiCurrencyInvoiceLineTotal = $multiCurrencyInvoiceLineTotal;
        return $this;
    }

    /**
     * Gets as hazardousMaterialsIndicator
     *
     * @return string
     */
    public function getHazardousMaterialsIndicator()
    {
        return $this->hazardousMaterialsIndicator;
    }

    /**
     * Sets a new hazardousMaterialsIndicator
     *
     * @param string $hazardousMaterialsIndicator
     * @return self
     */
    public function setHazardousMaterialsIndicator($hazardousMaterialsIndicator)
    {
        $this->hazardousMaterialsIndicator = $hazardousMaterialsIndicator;
        return $this;
    }


}

