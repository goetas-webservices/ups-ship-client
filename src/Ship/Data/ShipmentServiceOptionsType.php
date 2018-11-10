<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing ShipmentServiceOptionsType
 *
 *
 * XSD Type: ShipmentServiceOptionsType
 */
class ShipmentServiceOptionsType
{

    /**
     * @property string $saturdayDeliveryIndicator
     */
    private $saturdayDeliveryIndicator = null;

    /**
     * @property string $saturdayPickupIndicator
     */
    private $saturdayPickupIndicator = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\CODType $cOD
     */
    private $cOD = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipmentServiceOptionsAccessPointCODType $accessPointCOD
     */
    private $accessPointCOD = null;

    /**
     * @property string $deliverToAddresseeOnlyIndicator
     */
    private $deliverToAddresseeOnlyIndicator = null;

    /**
     * @property string $directDeliveryOnlyIndicator
     */
    private $directDeliveryOnlyIndicator = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\NotificationType[] $notification
     */
    private $notification = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\LabelDeliveryType $labelDelivery
     */
    private $labelDelivery = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\InternationalFormType $internationalForms
     */
    private $internationalForms = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\DeliveryConfirmationType $deliveryConfirmation
     */
    private $deliveryConfirmation = null;

    /**
     * @property string $returnOfDocumentIndicator
     */
    private $returnOfDocumentIndicator = null;

    /**
     * @property string $importControlIndicator
     */
    private $importControlIndicator = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\LabelMethodType $labelMethod
     */
    private $labelMethod = null;

    /**
     * @property string $commercialInvoiceRemovalIndicator
     */
    private $commercialInvoiceRemovalIndicator = null;

    /**
     * @property string $uPScarbonneutralIndicator
     */
    private $uPScarbonneutralIndicator = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\PreAlertNotificationType[] $preAlertNotification
     */
    private $preAlertNotification = [
        
    ];

    /**
     * @property string $exchangeForwardIndicator
     */
    private $exchangeForwardIndicator = null;

    /**
     * @property string $holdForPickupIndicator
     */
    private $holdForPickupIndicator = null;

    /**
     * @property string $dropoffAtUPSFacilityIndicator
     */
    private $dropoffAtUPSFacilityIndicator = null;

    /**
     * @property string $liftGateForPickUpIndicator
     */
    private $liftGateForPickUpIndicator = null;

    /**
     * @property string $liftGateForDeliveryIndicator
     */
    private $liftGateForDeliveryIndicator = null;

    /**
     * @property string $sDLShipmentIndicator
     */
    private $sDLShipmentIndicator = null;

    /**
     * @property string $ePRAReleaseCode
     */
    private $ePRAReleaseCode = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\RestrictedArticlesType $restrictedArticles
     */
    private $restrictedArticles = null;

    /**
     * Gets as saturdayDeliveryIndicator
     *
     * @return string
     */
    public function getSaturdayDeliveryIndicator()
    {
        return $this->saturdayDeliveryIndicator;
    }

    /**
     * Sets a new saturdayDeliveryIndicator
     *
     * @param string $saturdayDeliveryIndicator
     * @return self
     */
    public function setSaturdayDeliveryIndicator($saturdayDeliveryIndicator)
    {
        $this->saturdayDeliveryIndicator = $saturdayDeliveryIndicator;
        return $this;
    }

    /**
     * Gets as saturdayPickupIndicator
     *
     * @return string
     */
    public function getSaturdayPickupIndicator()
    {
        return $this->saturdayPickupIndicator;
    }

    /**
     * Sets a new saturdayPickupIndicator
     *
     * @param string $saturdayPickupIndicator
     * @return self
     */
    public function setSaturdayPickupIndicator($saturdayPickupIndicator)
    {
        $this->saturdayPickupIndicator = $saturdayPickupIndicator;
        return $this;
    }

    /**
     * Gets as cOD
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\CODType
     */
    public function getCOD()
    {
        return $this->cOD;
    }

    /**
     * Sets a new cOD
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\CODType $cOD
     * @return self
     */
    public function setCOD(\GoetasWebservices\Client\UPS\Ship\Data\CODType $cOD)
    {
        $this->cOD = $cOD;
        return $this;
    }

    /**
     * Gets as accessPointCOD
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipmentServiceOptionsAccessPointCODType
     */
    public function getAccessPointCOD()
    {
        return $this->accessPointCOD;
    }

    /**
     * Sets a new accessPointCOD
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipmentServiceOptionsAccessPointCODType $accessPointCOD
     * @return self
     */
    public function setAccessPointCOD(\GoetasWebservices\Client\UPS\Ship\Data\ShipmentServiceOptionsAccessPointCODType $accessPointCOD)
    {
        $this->accessPointCOD = $accessPointCOD;
        return $this;
    }

    /**
     * Gets as deliverToAddresseeOnlyIndicator
     *
     * @return string
     */
    public function getDeliverToAddresseeOnlyIndicator()
    {
        return $this->deliverToAddresseeOnlyIndicator;
    }

    /**
     * Sets a new deliverToAddresseeOnlyIndicator
     *
     * @param string $deliverToAddresseeOnlyIndicator
     * @return self
     */
    public function setDeliverToAddresseeOnlyIndicator($deliverToAddresseeOnlyIndicator)
    {
        $this->deliverToAddresseeOnlyIndicator = $deliverToAddresseeOnlyIndicator;
        return $this;
    }

    /**
     * Gets as directDeliveryOnlyIndicator
     *
     * @return string
     */
    public function getDirectDeliveryOnlyIndicator()
    {
        return $this->directDeliveryOnlyIndicator;
    }

    /**
     * Sets a new directDeliveryOnlyIndicator
     *
     * @param string $directDeliveryOnlyIndicator
     * @return self
     */
    public function setDirectDeliveryOnlyIndicator($directDeliveryOnlyIndicator)
    {
        $this->directDeliveryOnlyIndicator = $directDeliveryOnlyIndicator;
        return $this;
    }

    /**
     * Adds as notification
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ship\Data\NotificationType $notification
     */
    public function addToNotification(\GoetasWebservices\Client\UPS\Ship\Data\NotificationType $notification)
    {
        $this->notification[] = $notification;
        return $this;
    }

    /**
     * isset notification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotification($index)
    {
        return isset($this->notification[$index]);
    }

    /**
     * unset notification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotification($index)
    {
        unset($this->notification[$index]);
    }

    /**
     * Gets as notification
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\NotificationType[]
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * Sets a new notification
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\NotificationType[] $notification
     * @return self
     */
    public function setNotification(array $notification)
    {
        $this->notification = $notification;
        return $this;
    }

    /**
     * Gets as labelDelivery
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\LabelDeliveryType
     */
    public function getLabelDelivery()
    {
        return $this->labelDelivery;
    }

    /**
     * Sets a new labelDelivery
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\LabelDeliveryType $labelDelivery
     * @return self
     */
    public function setLabelDelivery(\GoetasWebservices\Client\UPS\Ship\Data\LabelDeliveryType $labelDelivery)
    {
        $this->labelDelivery = $labelDelivery;
        return $this;
    }

    /**
     * Gets as internationalForms
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\InternationalFormType
     */
    public function getInternationalForms()
    {
        return $this->internationalForms;
    }

    /**
     * Sets a new internationalForms
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\InternationalFormType $internationalForms
     * @return self
     */
    public function setInternationalForms(\GoetasWebservices\Client\UPS\Ifs\InternationalFormType $internationalForms)
    {
        $this->internationalForms = $internationalForms;
        return $this;
    }

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
     * Gets as returnOfDocumentIndicator
     *
     * @return string
     */
    public function getReturnOfDocumentIndicator()
    {
        return $this->returnOfDocumentIndicator;
    }

    /**
     * Sets a new returnOfDocumentIndicator
     *
     * @param string $returnOfDocumentIndicator
     * @return self
     */
    public function setReturnOfDocumentIndicator($returnOfDocumentIndicator)
    {
        $this->returnOfDocumentIndicator = $returnOfDocumentIndicator;
        return $this;
    }

    /**
     * Gets as importControlIndicator
     *
     * @return string
     */
    public function getImportControlIndicator()
    {
        return $this->importControlIndicator;
    }

    /**
     * Sets a new importControlIndicator
     *
     * @param string $importControlIndicator
     * @return self
     */
    public function setImportControlIndicator($importControlIndicator)
    {
        $this->importControlIndicator = $importControlIndicator;
        return $this;
    }

    /**
     * Gets as labelMethod
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\LabelMethodType
     */
    public function getLabelMethod()
    {
        return $this->labelMethod;
    }

    /**
     * Sets a new labelMethod
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\LabelMethodType $labelMethod
     * @return self
     */
    public function setLabelMethod(\GoetasWebservices\Client\UPS\Ship\Data\LabelMethodType $labelMethod)
    {
        $this->labelMethod = $labelMethod;
        return $this;
    }

    /**
     * Gets as commercialInvoiceRemovalIndicator
     *
     * @return string
     */
    public function getCommercialInvoiceRemovalIndicator()
    {
        return $this->commercialInvoiceRemovalIndicator;
    }

    /**
     * Sets a new commercialInvoiceRemovalIndicator
     *
     * @param string $commercialInvoiceRemovalIndicator
     * @return self
     */
    public function setCommercialInvoiceRemovalIndicator($commercialInvoiceRemovalIndicator)
    {
        $this->commercialInvoiceRemovalIndicator = $commercialInvoiceRemovalIndicator;
        return $this;
    }

    /**
     * Gets as uPScarbonneutralIndicator
     *
     * @return string
     */
    public function getUPScarbonneutralIndicator()
    {
        return $this->uPScarbonneutralIndicator;
    }

    /**
     * Sets a new uPScarbonneutralIndicator
     *
     * @param string $uPScarbonneutralIndicator
     * @return self
     */
    public function setUPScarbonneutralIndicator($uPScarbonneutralIndicator)
    {
        $this->uPScarbonneutralIndicator = $uPScarbonneutralIndicator;
        return $this;
    }

    /**
     * Adds as preAlertNotification
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ship\Data\PreAlertNotificationType $preAlertNotification
     */
    public function addToPreAlertNotification(\GoetasWebservices\Client\UPS\Ship\Data\PreAlertNotificationType $preAlertNotification)
    {
        $this->preAlertNotification[] = $preAlertNotification;
        return $this;
    }

    /**
     * isset preAlertNotification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPreAlertNotification($index)
    {
        return isset($this->preAlertNotification[$index]);
    }

    /**
     * unset preAlertNotification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPreAlertNotification($index)
    {
        unset($this->preAlertNotification[$index]);
    }

    /**
     * Gets as preAlertNotification
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\PreAlertNotificationType[]
     */
    public function getPreAlertNotification()
    {
        return $this->preAlertNotification;
    }

    /**
     * Sets a new preAlertNotification
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\PreAlertNotificationType[] $preAlertNotification
     * @return self
     */
    public function setPreAlertNotification(array $preAlertNotification)
    {
        $this->preAlertNotification = $preAlertNotification;
        return $this;
    }

    /**
     * Gets as exchangeForwardIndicator
     *
     * @return string
     */
    public function getExchangeForwardIndicator()
    {
        return $this->exchangeForwardIndicator;
    }

    /**
     * Sets a new exchangeForwardIndicator
     *
     * @param string $exchangeForwardIndicator
     * @return self
     */
    public function setExchangeForwardIndicator($exchangeForwardIndicator)
    {
        $this->exchangeForwardIndicator = $exchangeForwardIndicator;
        return $this;
    }

    /**
     * Gets as holdForPickupIndicator
     *
     * @return string
     */
    public function getHoldForPickupIndicator()
    {
        return $this->holdForPickupIndicator;
    }

    /**
     * Sets a new holdForPickupIndicator
     *
     * @param string $holdForPickupIndicator
     * @return self
     */
    public function setHoldForPickupIndicator($holdForPickupIndicator)
    {
        $this->holdForPickupIndicator = $holdForPickupIndicator;
        return $this;
    }

    /**
     * Gets as dropoffAtUPSFacilityIndicator
     *
     * @return string
     */
    public function getDropoffAtUPSFacilityIndicator()
    {
        return $this->dropoffAtUPSFacilityIndicator;
    }

    /**
     * Sets a new dropoffAtUPSFacilityIndicator
     *
     * @param string $dropoffAtUPSFacilityIndicator
     * @return self
     */
    public function setDropoffAtUPSFacilityIndicator($dropoffAtUPSFacilityIndicator)
    {
        $this->dropoffAtUPSFacilityIndicator = $dropoffAtUPSFacilityIndicator;
        return $this;
    }

    /**
     * Gets as liftGateForPickUpIndicator
     *
     * @return string
     */
    public function getLiftGateForPickUpIndicator()
    {
        return $this->liftGateForPickUpIndicator;
    }

    /**
     * Sets a new liftGateForPickUpIndicator
     *
     * @param string $liftGateForPickUpIndicator
     * @return self
     */
    public function setLiftGateForPickUpIndicator($liftGateForPickUpIndicator)
    {
        $this->liftGateForPickUpIndicator = $liftGateForPickUpIndicator;
        return $this;
    }

    /**
     * Gets as liftGateForDeliveryIndicator
     *
     * @return string
     */
    public function getLiftGateForDeliveryIndicator()
    {
        return $this->liftGateForDeliveryIndicator;
    }

    /**
     * Sets a new liftGateForDeliveryIndicator
     *
     * @param string $liftGateForDeliveryIndicator
     * @return self
     */
    public function setLiftGateForDeliveryIndicator($liftGateForDeliveryIndicator)
    {
        $this->liftGateForDeliveryIndicator = $liftGateForDeliveryIndicator;
        return $this;
    }

    /**
     * Gets as sDLShipmentIndicator
     *
     * @return string
     */
    public function getSDLShipmentIndicator()
    {
        return $this->sDLShipmentIndicator;
    }

    /**
     * Sets a new sDLShipmentIndicator
     *
     * @param string $sDLShipmentIndicator
     * @return self
     */
    public function setSDLShipmentIndicator($sDLShipmentIndicator)
    {
        $this->sDLShipmentIndicator = $sDLShipmentIndicator;
        return $this;
    }

    /**
     * Gets as ePRAReleaseCode
     *
     * @return string
     */
    public function getEPRAReleaseCode()
    {
        return $this->ePRAReleaseCode;
    }

    /**
     * Sets a new ePRAReleaseCode
     *
     * @param string $ePRAReleaseCode
     * @return self
     */
    public function setEPRAReleaseCode($ePRAReleaseCode)
    {
        $this->ePRAReleaseCode = $ePRAReleaseCode;
        return $this;
    }

    /**
     * Gets as restrictedArticles
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\RestrictedArticlesType
     */
    public function getRestrictedArticles()
    {
        return $this->restrictedArticles;
    }

    /**
     * Sets a new restrictedArticles
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\RestrictedArticlesType $restrictedArticles
     * @return self
     */
    public function setRestrictedArticles(\GoetasWebservices\Client\UPS\Ship\Data\RestrictedArticlesType $restrictedArticles)
    {
        $this->restrictedArticles = $restrictedArticles;
        return $this;
    }


}

