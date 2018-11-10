<?php

namespace GoetasWebservices\Client\UPS\Common;

/**
 * Class representing ResponseType
 *
 *
 * XSD Type: ResponseType
 */
class ResponseType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Common\CodeDescriptionType $responseStatus
     */
    private $responseStatus = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Common\CodeDescriptionType[] $alert
     */
    private $alert = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\UPS\Common\DetailType[] $alertDetail
     */
    private $alertDetail = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\UPS\Common\TransactionReferenceType $transactionReference
     */
    private $transactionReference = null;

    /**
     * Gets as responseStatus
     *
     * @return \GoetasWebservices\Client\UPS\Common\CodeDescriptionType
     */
    public function getResponseStatus()
    {
        return $this->responseStatus;
    }

    /**
     * Sets a new responseStatus
     *
     * @param \GoetasWebservices\Client\UPS\Common\CodeDescriptionType $responseStatus
     * @return self
     */
    public function setResponseStatus(\GoetasWebservices\Client\UPS\Common\CodeDescriptionType $responseStatus)
    {
        $this->responseStatus = $responseStatus;
        return $this;
    }

    /**
     * Adds as alert
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Common\CodeDescriptionType $alert
     */
    public function addToAlert(\GoetasWebservices\Client\UPS\Common\CodeDescriptionType $alert)
    {
        $this->alert[] = $alert;
        return $this;
    }

    /**
     * isset alert
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlert($index)
    {
        return isset($this->alert[$index]);
    }

    /**
     * unset alert
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlert($index)
    {
        unset($this->alert[$index]);
    }

    /**
     * Gets as alert
     *
     * @return \GoetasWebservices\Client\UPS\Common\CodeDescriptionType[]
     */
    public function getAlert()
    {
        return $this->alert;
    }

    /**
     * Sets a new alert
     *
     * @param \GoetasWebservices\Client\UPS\Common\CodeDescriptionType[] $alert
     * @return self
     */
    public function setAlert(array $alert)
    {
        $this->alert = $alert;
        return $this;
    }

    /**
     * Adds as alertDetail
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Common\DetailType $alertDetail
     */
    public function addToAlertDetail(\GoetasWebservices\Client\UPS\Common\DetailType $alertDetail)
    {
        $this->alertDetail[] = $alertDetail;
        return $this;
    }

    /**
     * isset alertDetail
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlertDetail($index)
    {
        return isset($this->alertDetail[$index]);
    }

    /**
     * unset alertDetail
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlertDetail($index)
    {
        unset($this->alertDetail[$index]);
    }

    /**
     * Gets as alertDetail
     *
     * @return \GoetasWebservices\Client\UPS\Common\DetailType[]
     */
    public function getAlertDetail()
    {
        return $this->alertDetail;
    }

    /**
     * Sets a new alertDetail
     *
     * @param \GoetasWebservices\Client\UPS\Common\DetailType[] $alertDetail
     * @return self
     */
    public function setAlertDetail(array $alertDetail)
    {
        $this->alertDetail = $alertDetail;
        return $this;
    }

    /**
     * Gets as transactionReference
     *
     * @return \GoetasWebservices\Client\UPS\Common\TransactionReferenceType
     */
    public function getTransactionReference()
    {
        return $this->transactionReference;
    }

    /**
     * Sets a new transactionReference
     *
     * @param \GoetasWebservices\Client\UPS\Common\TransactionReferenceType $transactionReference
     * @return self
     */
    public function setTransactionReference(\GoetasWebservices\Client\UPS\Common\TransactionReferenceType $transactionReference)
    {
        $this->transactionReference = $transactionReference;
        return $this;
    }


}

