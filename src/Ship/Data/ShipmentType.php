<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing ShipmentType
 *
 *
 * XSD Type: ShipmentType
 */
class ShipmentType
{

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ReturnServiceType $returnService
     */
    private $returnService = null;

    /**
     * @property string $documentsOnlyIndicator
     */
    private $documentsOnlyIndicator = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipperType $shipper
     */
    private $shipper = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipToType $shipTo
     */
    private $shipTo = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\AlternateDeliveryAddressType $alternateDeliveryAddress
     */
    private $alternateDeliveryAddress = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipFromType $shipFrom
     */
    private $shipFrom = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\PaymentInfoType $paymentInformation
     */
    private $paymentInformation = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\FRSPaymentInfoType $fRSPaymentInformation
     */
    private $fRSPaymentInformation = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\FreightShipmentInformationType $freightShipmentInformation
     */
    private $freightShipmentInformation = null;

    /**
     * @property string $goodsNotInFreeCirculationIndicator
     */
    private $goodsNotInFreeCirculationIndicator = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\RateInfoType $shipmentRatingOptions
     */
    private $shipmentRatingOptions = null;

    /**
     * @property string $movementReferenceNumber
     */
    private $movementReferenceNumber = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ReferenceNumberType[] $referenceNumber
     */
    private $referenceNumber = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ServiceType $service
     */
    private $service = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\CurrencyMonetaryType $invoiceLineTotal
     */
    private $invoiceLineTotal = null;

    /**
     * @property string $numOfPiecesInShipment
     */
    private $numOfPiecesInShipment = null;

    /**
     * @property string $uSPSEndorsement
     */
    private $uSPSEndorsement = null;

    /**
     * @property string $mILabelCN22Indicator
     */
    private $mILabelCN22Indicator = null;

    /**
     * @property string $subClassification
     */
    private $subClassification = null;

    /**
     * @property string $costCenter
     */
    private $costCenter = null;

    /**
     * @property string $costCenterBarcodeIndicator
     */
    private $costCenterBarcodeIndicator = null;

    /**
     * @property string $packageID
     */
    private $packageID = null;

    /**
     * @property string $packageIDBarcodeIndicator
     */
    private $packageIDBarcodeIndicator = null;

    /**
     * @property string $irregularIndicator
     */
    private $irregularIndicator = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\IndicationType[] $shipmentIndicationType
     */
    private $shipmentIndicationType = [
        
    ];

    /**
     * @property string $mIDualReturnShipmentKey
     */
    private $mIDualReturnShipmentKey = null;

    /**
     * @property string $mIDualReturnShipmentIndicator
     */
    private $mIDualReturnShipmentIndicator = null;

    /**
     * @property string $ratingMethodRequestedIndicator
     */
    private $ratingMethodRequestedIndicator = null;

    /**
     * @property string $taxInformationIndicator
     */
    private $taxInformationIndicator = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\PromotionalDiscountInformationType $promotionalDiscountInformation
     */
    private $promotionalDiscountInformation = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\DGSignatoryInfoType $dGSignatoryInfo
     */
    private $dGSignatoryInfo = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipmentType\ShipmentServiceOptionsAType $shipmentServiceOptions
     */
    private $shipmentServiceOptions = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\PackageType[] $package
     */
    private $package = [
        
    ];

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
     * Gets as returnService
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ReturnServiceType
     */
    public function getReturnService()
    {
        return $this->returnService;
    }

    /**
     * Sets a new returnService
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ReturnServiceType $returnService
     * @return self
     */
    public function setReturnService(\GoetasWebservices\Client\UPS\Ship\Data\ReturnServiceType $returnService)
    {
        $this->returnService = $returnService;
        return $this;
    }

    /**
     * Gets as documentsOnlyIndicator
     *
     * @return string
     */
    public function getDocumentsOnlyIndicator()
    {
        return $this->documentsOnlyIndicator;
    }

    /**
     * Sets a new documentsOnlyIndicator
     *
     * @param string $documentsOnlyIndicator
     * @return self
     */
    public function setDocumentsOnlyIndicator($documentsOnlyIndicator)
    {
        $this->documentsOnlyIndicator = $documentsOnlyIndicator;
        return $this;
    }

    /**
     * Gets as shipper
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipperType
     */
    public function getShipper()
    {
        return $this->shipper;
    }

    /**
     * Sets a new shipper
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipperType $shipper
     * @return self
     */
    public function setShipper(\GoetasWebservices\Client\UPS\Ship\Data\ShipperType $shipper)
    {
        $this->shipper = $shipper;
        return $this;
    }

    /**
     * Gets as shipTo
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipToType
     */
    public function getShipTo()
    {
        return $this->shipTo;
    }

    /**
     * Sets a new shipTo
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipToType $shipTo
     * @return self
     */
    public function setShipTo(\GoetasWebservices\Client\UPS\Ship\Data\ShipToType $shipTo)
    {
        $this->shipTo = $shipTo;
        return $this;
    }

    /**
     * Gets as alternateDeliveryAddress
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\AlternateDeliveryAddressType
     */
    public function getAlternateDeliveryAddress()
    {
        return $this->alternateDeliveryAddress;
    }

    /**
     * Sets a new alternateDeliveryAddress
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\AlternateDeliveryAddressType $alternateDeliveryAddress
     * @return self
     */
    public function setAlternateDeliveryAddress(\GoetasWebservices\Client\UPS\Ship\Data\AlternateDeliveryAddressType $alternateDeliveryAddress)
    {
        $this->alternateDeliveryAddress = $alternateDeliveryAddress;
        return $this;
    }

    /**
     * Gets as shipFrom
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipFromType
     */
    public function getShipFrom()
    {
        return $this->shipFrom;
    }

    /**
     * Sets a new shipFrom
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipFromType $shipFrom
     * @return self
     */
    public function setShipFrom(\GoetasWebservices\Client\UPS\Ship\Data\ShipFromType $shipFrom)
    {
        $this->shipFrom = $shipFrom;
        return $this;
    }

    /**
     * Gets as paymentInformation
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\PaymentInfoType
     */
    public function getPaymentInformation()
    {
        return $this->paymentInformation;
    }

    /**
     * Sets a new paymentInformation
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\PaymentInfoType $paymentInformation
     * @return self
     */
    public function setPaymentInformation(\GoetasWebservices\Client\UPS\Ship\Data\PaymentInfoType $paymentInformation)
    {
        $this->paymentInformation = $paymentInformation;
        return $this;
    }

    /**
     * Gets as fRSPaymentInformation
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\FRSPaymentInfoType
     */
    public function getFRSPaymentInformation()
    {
        return $this->fRSPaymentInformation;
    }

    /**
     * Sets a new fRSPaymentInformation
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\FRSPaymentInfoType $fRSPaymentInformation
     * @return self
     */
    public function setFRSPaymentInformation(\GoetasWebservices\Client\UPS\Ship\Data\FRSPaymentInfoType $fRSPaymentInformation)
    {
        $this->fRSPaymentInformation = $fRSPaymentInformation;
        return $this;
    }

    /**
     * Gets as freightShipmentInformation
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\FreightShipmentInformationType
     */
    public function getFreightShipmentInformation()
    {
        return $this->freightShipmentInformation;
    }

    /**
     * Sets a new freightShipmentInformation
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\FreightShipmentInformationType $freightShipmentInformation
     * @return self
     */
    public function setFreightShipmentInformation(\GoetasWebservices\Client\UPS\Ship\Data\FreightShipmentInformationType $freightShipmentInformation)
    {
        $this->freightShipmentInformation = $freightShipmentInformation;
        return $this;
    }

    /**
     * Gets as goodsNotInFreeCirculationIndicator
     *
     * @return string
     */
    public function getGoodsNotInFreeCirculationIndicator()
    {
        return $this->goodsNotInFreeCirculationIndicator;
    }

    /**
     * Sets a new goodsNotInFreeCirculationIndicator
     *
     * @param string $goodsNotInFreeCirculationIndicator
     * @return self
     */
    public function setGoodsNotInFreeCirculationIndicator($goodsNotInFreeCirculationIndicator)
    {
        $this->goodsNotInFreeCirculationIndicator = $goodsNotInFreeCirculationIndicator;
        return $this;
    }

    /**
     * Gets as shipmentRatingOptions
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\RateInfoType
     */
    public function getShipmentRatingOptions()
    {
        return $this->shipmentRatingOptions;
    }

    /**
     * Sets a new shipmentRatingOptions
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\RateInfoType $shipmentRatingOptions
     * @return self
     */
    public function setShipmentRatingOptions(\GoetasWebservices\Client\UPS\Ship\Data\RateInfoType $shipmentRatingOptions)
    {
        $this->shipmentRatingOptions = $shipmentRatingOptions;
        return $this;
    }

    /**
     * Gets as movementReferenceNumber
     *
     * @return string
     */
    public function getMovementReferenceNumber()
    {
        return $this->movementReferenceNumber;
    }

    /**
     * Sets a new movementReferenceNumber
     *
     * @param string $movementReferenceNumber
     * @return self
     */
    public function setMovementReferenceNumber($movementReferenceNumber)
    {
        $this->movementReferenceNumber = $movementReferenceNumber;
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
     * Gets as service
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ServiceType
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ServiceType $service
     * @return self
     */
    public function setService(\GoetasWebservices\Client\UPS\Ship\Data\ServiceType $service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Gets as invoiceLineTotal
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\CurrencyMonetaryType
     */
    public function getInvoiceLineTotal()
    {
        return $this->invoiceLineTotal;
    }

    /**
     * Sets a new invoiceLineTotal
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\CurrencyMonetaryType $invoiceLineTotal
     * @return self
     */
    public function setInvoiceLineTotal(\GoetasWebservices\Client\UPS\Ship\Data\CurrencyMonetaryType $invoiceLineTotal)
    {
        $this->invoiceLineTotal = $invoiceLineTotal;
        return $this;
    }

    /**
     * Gets as numOfPiecesInShipment
     *
     * @return string
     */
    public function getNumOfPiecesInShipment()
    {
        return $this->numOfPiecesInShipment;
    }

    /**
     * Sets a new numOfPiecesInShipment
     *
     * @param string $numOfPiecesInShipment
     * @return self
     */
    public function setNumOfPiecesInShipment($numOfPiecesInShipment)
    {
        $this->numOfPiecesInShipment = $numOfPiecesInShipment;
        return $this;
    }

    /**
     * Gets as uSPSEndorsement
     *
     * @return string
     */
    public function getUSPSEndorsement()
    {
        return $this->uSPSEndorsement;
    }

    /**
     * Sets a new uSPSEndorsement
     *
     * @param string $uSPSEndorsement
     * @return self
     */
    public function setUSPSEndorsement($uSPSEndorsement)
    {
        $this->uSPSEndorsement = $uSPSEndorsement;
        return $this;
    }

    /**
     * Gets as mILabelCN22Indicator
     *
     * @return string
     */
    public function getMILabelCN22Indicator()
    {
        return $this->mILabelCN22Indicator;
    }

    /**
     * Sets a new mILabelCN22Indicator
     *
     * @param string $mILabelCN22Indicator
     * @return self
     */
    public function setMILabelCN22Indicator($mILabelCN22Indicator)
    {
        $this->mILabelCN22Indicator = $mILabelCN22Indicator;
        return $this;
    }

    /**
     * Gets as subClassification
     *
     * @return string
     */
    public function getSubClassification()
    {
        return $this->subClassification;
    }

    /**
     * Sets a new subClassification
     *
     * @param string $subClassification
     * @return self
     */
    public function setSubClassification($subClassification)
    {
        $this->subClassification = $subClassification;
        return $this;
    }

    /**
     * Gets as costCenter
     *
     * @return string
     */
    public function getCostCenter()
    {
        return $this->costCenter;
    }

    /**
     * Sets a new costCenter
     *
     * @param string $costCenter
     * @return self
     */
    public function setCostCenter($costCenter)
    {
        $this->costCenter = $costCenter;
        return $this;
    }

    /**
     * Gets as costCenterBarcodeIndicator
     *
     * @return string
     */
    public function getCostCenterBarcodeIndicator()
    {
        return $this->costCenterBarcodeIndicator;
    }

    /**
     * Sets a new costCenterBarcodeIndicator
     *
     * @param string $costCenterBarcodeIndicator
     * @return self
     */
    public function setCostCenterBarcodeIndicator($costCenterBarcodeIndicator)
    {
        $this->costCenterBarcodeIndicator = $costCenterBarcodeIndicator;
        return $this;
    }

    /**
     * Gets as packageID
     *
     * @return string
     */
    public function getPackageID()
    {
        return $this->packageID;
    }

    /**
     * Sets a new packageID
     *
     * @param string $packageID
     * @return self
     */
    public function setPackageID($packageID)
    {
        $this->packageID = $packageID;
        return $this;
    }

    /**
     * Gets as packageIDBarcodeIndicator
     *
     * @return string
     */
    public function getPackageIDBarcodeIndicator()
    {
        return $this->packageIDBarcodeIndicator;
    }

    /**
     * Sets a new packageIDBarcodeIndicator
     *
     * @param string $packageIDBarcodeIndicator
     * @return self
     */
    public function setPackageIDBarcodeIndicator($packageIDBarcodeIndicator)
    {
        $this->packageIDBarcodeIndicator = $packageIDBarcodeIndicator;
        return $this;
    }

    /**
     * Gets as irregularIndicator
     *
     * @return string
     */
    public function getIrregularIndicator()
    {
        return $this->irregularIndicator;
    }

    /**
     * Sets a new irregularIndicator
     *
     * @param string $irregularIndicator
     * @return self
     */
    public function setIrregularIndicator($irregularIndicator)
    {
        $this->irregularIndicator = $irregularIndicator;
        return $this;
    }

    /**
     * Adds as shipmentIndicationType
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ship\Data\IndicationType $shipmentIndicationType
     */
    public function addToShipmentIndicationType(\GoetasWebservices\Client\UPS\Ship\Data\IndicationType $shipmentIndicationType)
    {
        $this->shipmentIndicationType[] = $shipmentIndicationType;
        return $this;
    }

    /**
     * isset shipmentIndicationType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentIndicationType($index)
    {
        return isset($this->shipmentIndicationType[$index]);
    }

    /**
     * unset shipmentIndicationType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentIndicationType($index)
    {
        unset($this->shipmentIndicationType[$index]);
    }

    /**
     * Gets as shipmentIndicationType
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\IndicationType[]
     */
    public function getShipmentIndicationType()
    {
        return $this->shipmentIndicationType;
    }

    /**
     * Sets a new shipmentIndicationType
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\IndicationType[] $shipmentIndicationType
     * @return self
     */
    public function setShipmentIndicationType(array $shipmentIndicationType)
    {
        $this->shipmentIndicationType = $shipmentIndicationType;
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
     * Gets as mIDualReturnShipmentIndicator
     *
     * @return string
     */
    public function getMIDualReturnShipmentIndicator()
    {
        return $this->mIDualReturnShipmentIndicator;
    }

    /**
     * Sets a new mIDualReturnShipmentIndicator
     *
     * @param string $mIDualReturnShipmentIndicator
     * @return self
     */
    public function setMIDualReturnShipmentIndicator($mIDualReturnShipmentIndicator)
    {
        $this->mIDualReturnShipmentIndicator = $mIDualReturnShipmentIndicator;
        return $this;
    }

    /**
     * Gets as ratingMethodRequestedIndicator
     *
     * @return string
     */
    public function getRatingMethodRequestedIndicator()
    {
        return $this->ratingMethodRequestedIndicator;
    }

    /**
     * Sets a new ratingMethodRequestedIndicator
     *
     * @param string $ratingMethodRequestedIndicator
     * @return self
     */
    public function setRatingMethodRequestedIndicator($ratingMethodRequestedIndicator)
    {
        $this->ratingMethodRequestedIndicator = $ratingMethodRequestedIndicator;
        return $this;
    }

    /**
     * Gets as taxInformationIndicator
     *
     * @return string
     */
    public function getTaxInformationIndicator()
    {
        return $this->taxInformationIndicator;
    }

    /**
     * Sets a new taxInformationIndicator
     *
     * @param string $taxInformationIndicator
     * @return self
     */
    public function setTaxInformationIndicator($taxInformationIndicator)
    {
        $this->taxInformationIndicator = $taxInformationIndicator;
        return $this;
    }

    /**
     * Gets as promotionalDiscountInformation
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\PromotionalDiscountInformationType
     */
    public function getPromotionalDiscountInformation()
    {
        return $this->promotionalDiscountInformation;
    }

    /**
     * Sets a new promotionalDiscountInformation
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\PromotionalDiscountInformationType $promotionalDiscountInformation
     * @return self
     */
    public function setPromotionalDiscountInformation(\GoetasWebservices\Client\UPS\Ship\Data\PromotionalDiscountInformationType $promotionalDiscountInformation)
    {
        $this->promotionalDiscountInformation = $promotionalDiscountInformation;
        return $this;
    }

    /**
     * Gets as dGSignatoryInfo
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\DGSignatoryInfoType
     */
    public function getDGSignatoryInfo()
    {
        return $this->dGSignatoryInfo;
    }

    /**
     * Sets a new dGSignatoryInfo
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\DGSignatoryInfoType $dGSignatoryInfo
     * @return self
     */
    public function setDGSignatoryInfo(\GoetasWebservices\Client\UPS\Ship\Data\DGSignatoryInfoType $dGSignatoryInfo)
    {
        $this->dGSignatoryInfo = $dGSignatoryInfo;
        return $this;
    }

    /**
     * Gets as shipmentServiceOptions
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipmentType\ShipmentServiceOptionsAType
     */
    public function getShipmentServiceOptions()
    {
        return $this->shipmentServiceOptions;
    }

    /**
     * Sets a new shipmentServiceOptions
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipmentType\ShipmentServiceOptionsAType $shipmentServiceOptions
     * @return self
     */
    public function setShipmentServiceOptions(\GoetasWebservices\Client\UPS\Ship\Data\ShipmentType\ShipmentServiceOptionsAType $shipmentServiceOptions)
    {
        $this->shipmentServiceOptions = $shipmentServiceOptions;
        return $this;
    }

    /**
     * Adds as package
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ship\Data\PackageType $package
     */
    public function addToPackage(\GoetasWebservices\Client\UPS\Ship\Data\PackageType $package)
    {
        $this->package[] = $package;
        return $this;
    }

    /**
     * isset package
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackage($index)
    {
        return isset($this->package[$index]);
    }

    /**
     * unset package
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackage($index)
    {
        unset($this->package[$index]);
    }

    /**
     * Gets as package
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\PackageType[]
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Sets a new package
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\PackageType[] $package
     * @return self
     */
    public function setPackage(array $package)
    {
        $this->package = $package;
        return $this;
    }


}

