<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing ShipmentResultsType
 *
 *
 * XSD Type: ShipmentResultsType
 */
class ShipmentResultsType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\DisclaimerType[] $disclaimer
     */
    private $disclaimer = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipmentChargesType $shipmentCharges
     */
    private $shipmentCharges = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\NegotiatedRateChargesType $negotiatedRateCharges
     */
    private $negotiatedRateCharges = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\FRSShipmentDataType $fRSShipmentData
     */
    private $fRSShipmentData = null;

    /**
     * @property string $ratingMethod
     */
    private $ratingMethod = null;

    /**
     * @property string $billableWeightCalculationMethod
     */
    private $billableWeightCalculationMethod = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\BillingWeightType $billingWeight
     */
    private $billingWeight = null;

    /**
     * @property string $shipmentIdentificationNumber
     */
    private $shipmentIdentificationNumber = null;

    /**
     * @property string $mIDualReturnShipmentKey
     */
    private $mIDualReturnShipmentKey = null;

    /**
     * @property string $shipmentDigest
     */
    private $shipmentDigest = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\PackageResultsType[] $packageResults
     */
    private $packageResults = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ImageType[] $controlLogReceipt
     */
    private $controlLogReceipt = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\FormType $form
     */
    private $form = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\SCReportType $cODTurnInPage
     */
    private $cODTurnInPage = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\HighValueReportType $highValueReport
     */
    private $highValueReport = null;

    /**
     * @property string $labelURL
     */
    private $labelURL = null;

    /**
     * @property string $localLanguageLabelURL
     */
    private $localLanguageLabelURL = null;

    /**
     * @property string $receiptURL
     */
    private $receiptURL = null;

    /**
     * @property string $localLanguageReceiptURL
     */
    private $localLanguageReceiptURL = null;

    /**
     * @property string[] $dGPaperImage
     */
    private $dGPaperImage = [
        
    ];

    /**
     * Adds as disclaimer
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ship\Data\DisclaimerType $disclaimer
     */
    public function addToDisclaimer(\GoetasWebservices\Client\UPS\Ship\Data\DisclaimerType $disclaimer)
    {
        $this->disclaimer[] = $disclaimer;
        return $this;
    }

    /**
     * isset disclaimer
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisclaimer($index)
    {
        return isset($this->disclaimer[$index]);
    }

    /**
     * unset disclaimer
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisclaimer($index)
    {
        unset($this->disclaimer[$index]);
    }

    /**
     * Gets as disclaimer
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\DisclaimerType[]
     */
    public function getDisclaimer()
    {
        return $this->disclaimer;
    }

    /**
     * Sets a new disclaimer
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\DisclaimerType[] $disclaimer
     * @return self
     */
    public function setDisclaimer(array $disclaimer)
    {
        $this->disclaimer = $disclaimer;
        return $this;
    }

    /**
     * Gets as shipmentCharges
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipmentChargesType
     */
    public function getShipmentCharges()
    {
        return $this->shipmentCharges;
    }

    /**
     * Sets a new shipmentCharges
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipmentChargesType $shipmentCharges
     * @return self
     */
    public function setShipmentCharges(\GoetasWebservices\Client\UPS\Ship\Data\ShipmentChargesType $shipmentCharges)
    {
        $this->shipmentCharges = $shipmentCharges;
        return $this;
    }

    /**
     * Gets as negotiatedRateCharges
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\NegotiatedRateChargesType
     */
    public function getNegotiatedRateCharges()
    {
        return $this->negotiatedRateCharges;
    }

    /**
     * Sets a new negotiatedRateCharges
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\NegotiatedRateChargesType $negotiatedRateCharges
     * @return self
     */
    public function setNegotiatedRateCharges(\GoetasWebservices\Client\UPS\Ship\Data\NegotiatedRateChargesType $negotiatedRateCharges)
    {
        $this->negotiatedRateCharges = $negotiatedRateCharges;
        return $this;
    }

    /**
     * Gets as fRSShipmentData
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\FRSShipmentDataType
     */
    public function getFRSShipmentData()
    {
        return $this->fRSShipmentData;
    }

    /**
     * Sets a new fRSShipmentData
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\FRSShipmentDataType $fRSShipmentData
     * @return self
     */
    public function setFRSShipmentData(\GoetasWebservices\Client\UPS\Ship\Data\FRSShipmentDataType $fRSShipmentData)
    {
        $this->fRSShipmentData = $fRSShipmentData;
        return $this;
    }

    /**
     * Gets as ratingMethod
     *
     * @return string
     */
    public function getRatingMethod()
    {
        return $this->ratingMethod;
    }

    /**
     * Sets a new ratingMethod
     *
     * @param string $ratingMethod
     * @return self
     */
    public function setRatingMethod($ratingMethod)
    {
        $this->ratingMethod = $ratingMethod;
        return $this;
    }

    /**
     * Gets as billableWeightCalculationMethod
     *
     * @return string
     */
    public function getBillableWeightCalculationMethod()
    {
        return $this->billableWeightCalculationMethod;
    }

    /**
     * Sets a new billableWeightCalculationMethod
     *
     * @param string $billableWeightCalculationMethod
     * @return self
     */
    public function setBillableWeightCalculationMethod($billableWeightCalculationMethod)
    {
        $this->billableWeightCalculationMethod = $billableWeightCalculationMethod;
        return $this;
    }

    /**
     * Gets as billingWeight
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\BillingWeightType
     */
    public function getBillingWeight()
    {
        return $this->billingWeight;
    }

    /**
     * Sets a new billingWeight
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\BillingWeightType $billingWeight
     * @return self
     */
    public function setBillingWeight(\GoetasWebservices\Client\UPS\Ship\Data\BillingWeightType $billingWeight)
    {
        $this->billingWeight = $billingWeight;
        return $this;
    }

    /**
     * Gets as shipmentIdentificationNumber
     *
     * @return string
     */
    public function getShipmentIdentificationNumber()
    {
        return $this->shipmentIdentificationNumber;
    }

    /**
     * Sets a new shipmentIdentificationNumber
     *
     * @param string $shipmentIdentificationNumber
     * @return self
     */
    public function setShipmentIdentificationNumber($shipmentIdentificationNumber)
    {
        $this->shipmentIdentificationNumber = $shipmentIdentificationNumber;
        return $this;
    }

    /**
     * Gets as mIDualReturnShipmentKey
     *
     * @return string
     */
    public function getMIDualReturnShipmentKey()
    {
        return $this->mIDualReturnShipmentKey;
    }

    /**
     * Sets a new mIDualReturnShipmentKey
     *
     * @param string $mIDualReturnShipmentKey
     * @return self
     */
    public function setMIDualReturnShipmentKey($mIDualReturnShipmentKey)
    {
        $this->mIDualReturnShipmentKey = $mIDualReturnShipmentKey;
        return $this;
    }

    /**
     * Gets as shipmentDigest
     *
     * @return string
     */
    public function getShipmentDigest()
    {
        return $this->shipmentDigest;
    }

    /**
     * Sets a new shipmentDigest
     *
     * @param string $shipmentDigest
     * @return self
     */
    public function setShipmentDigest($shipmentDigest)
    {
        $this->shipmentDigest = $shipmentDigest;
        return $this;
    }

    /**
     * Adds as packageResults
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ship\Data\PackageResultsType $packageResults
     */
    public function addToPackageResults(\GoetasWebservices\Client\UPS\Ship\Data\PackageResultsType $packageResults)
    {
        $this->packageResults[] = $packageResults;
        return $this;
    }

    /**
     * isset packageResults
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackageResults($index)
    {
        return isset($this->packageResults[$index]);
    }

    /**
     * unset packageResults
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackageResults($index)
    {
        unset($this->packageResults[$index]);
    }

    /**
     * Gets as packageResults
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\PackageResultsType[]
     */
    public function getPackageResults()
    {
        return $this->packageResults;
    }

    /**
     * Sets a new packageResults
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\PackageResultsType[] $packageResults
     * @return self
     */
    public function setPackageResults(array $packageResults)
    {
        $this->packageResults = $packageResults;
        return $this;
    }

    /**
     * Adds as controlLogReceipt
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ImageType $controlLogReceipt
     */
    public function addToControlLogReceipt(\GoetasWebservices\Client\UPS\Ship\Data\ImageType $controlLogReceipt)
    {
        $this->controlLogReceipt[] = $controlLogReceipt;
        return $this;
    }

    /**
     * isset controlLogReceipt
     *
     * @param int|string $index
     * @return bool
     */
    public function issetControlLogReceipt($index)
    {
        return isset($this->controlLogReceipt[$index]);
    }

    /**
     * unset controlLogReceipt
     *
     * @param int|string $index
     * @return void
     */
    public function unsetControlLogReceipt($index)
    {
        unset($this->controlLogReceipt[$index]);
    }

    /**
     * Gets as controlLogReceipt
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ImageType[]
     */
    public function getControlLogReceipt()
    {
        return $this->controlLogReceipt;
    }

    /**
     * Sets a new controlLogReceipt
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ImageType[] $controlLogReceipt
     * @return self
     */
    public function setControlLogReceipt(array $controlLogReceipt)
    {
        $this->controlLogReceipt = $controlLogReceipt;
        return $this;
    }

    /**
     * Gets as form
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\FormType
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Sets a new form
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\FormType $form
     * @return self
     */
    public function setForm(\GoetasWebservices\Client\UPS\Ship\Data\FormType $form)
    {
        $this->form = $form;
        return $this;
    }

    /**
     * Gets as cODTurnInPage
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\SCReportType
     */
    public function getCODTurnInPage()
    {
        return $this->cODTurnInPage;
    }

    /**
     * Sets a new cODTurnInPage
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\SCReportType $cODTurnInPage
     * @return self
     */
    public function setCODTurnInPage(\GoetasWebservices\Client\UPS\Ship\Data\SCReportType $cODTurnInPage)
    {
        $this->cODTurnInPage = $cODTurnInPage;
        return $this;
    }

    /**
     * Gets as highValueReport
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\HighValueReportType
     */
    public function getHighValueReport()
    {
        return $this->highValueReport;
    }

    /**
     * Sets a new highValueReport
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\HighValueReportType $highValueReport
     * @return self
     */
    public function setHighValueReport(\GoetasWebservices\Client\UPS\Ship\Data\HighValueReportType $highValueReport)
    {
        $this->highValueReport = $highValueReport;
        return $this;
    }

    /**
     * Gets as labelURL
     *
     * @return string
     */
    public function getLabelURL()
    {
        return $this->labelURL;
    }

    /**
     * Sets a new labelURL
     *
     * @param string $labelURL
     * @return self
     */
    public function setLabelURL($labelURL)
    {
        $this->labelURL = $labelURL;
        return $this;
    }

    /**
     * Gets as localLanguageLabelURL
     *
     * @return string
     */
    public function getLocalLanguageLabelURL()
    {
        return $this->localLanguageLabelURL;
    }

    /**
     * Sets a new localLanguageLabelURL
     *
     * @param string $localLanguageLabelURL
     * @return self
     */
    public function setLocalLanguageLabelURL($localLanguageLabelURL)
    {
        $this->localLanguageLabelURL = $localLanguageLabelURL;
        return $this;
    }

    /**
     * Gets as receiptURL
     *
     * @return string
     */
    public function getReceiptURL()
    {
        return $this->receiptURL;
    }

    /**
     * Sets a new receiptURL
     *
     * @param string $receiptURL
     * @return self
     */
    public function setReceiptURL($receiptURL)
    {
        $this->receiptURL = $receiptURL;
        return $this;
    }

    /**
     * Gets as localLanguageReceiptURL
     *
     * @return string
     */
    public function getLocalLanguageReceiptURL()
    {
        return $this->localLanguageReceiptURL;
    }

    /**
     * Sets a new localLanguageReceiptURL
     *
     * @param string $localLanguageReceiptURL
     * @return self
     */
    public function setLocalLanguageReceiptURL($localLanguageReceiptURL)
    {
        $this->localLanguageReceiptURL = $localLanguageReceiptURL;
        return $this;
    }

    /**
     * Adds as dGPaperImage
     *
     * @return self
     * @param string $dGPaperImage
     */
    public function addToDGPaperImage($dGPaperImage)
    {
        $this->dGPaperImage[] = $dGPaperImage;
        return $this;
    }

    /**
     * isset dGPaperImage
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDGPaperImage($index)
    {
        return isset($this->dGPaperImage[$index]);
    }

    /**
     * unset dGPaperImage
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDGPaperImage($index)
    {
        unset($this->dGPaperImage[$index]);
    }

    /**
     * Gets as dGPaperImage
     *
     * @return string[]
     */
    public function getDGPaperImage()
    {
        return $this->dGPaperImage;
    }

    /**
     * Sets a new dGPaperImage
     *
     * @param string[] $dGPaperImage
     * @return self
     */
    public function setDGPaperImage(array $dGPaperImage)
    {
        $this->dGPaperImage = $dGPaperImage;
        return $this;
    }


}

