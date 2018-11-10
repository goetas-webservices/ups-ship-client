<?php

namespace GoetasWebservices\Client\UPS\Common;

/**
 * Class representing RequestType
 *
 *
 * XSD Type: RequestType
 */
class RequestType
{

    /**
     * @property string[] $requestOption
     */
    private $requestOption = [
        
    ];

    /**
     * @property string $subVersion
     */
    private $subVersion = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Common\TransactionReferenceType $transactionReference
     */
    private $transactionReference = null;

    /**
     * Adds as requestOption
     *
     * @return self
     * @param string $requestOption
     */
    public function addToRequestOption($requestOption)
    {
        $this->requestOption[] = $requestOption;
        return $this;
    }

    /**
     * isset requestOption
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestOption($index)
    {
        return isset($this->requestOption[$index]);
    }

    /**
     * unset requestOption
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestOption($index)
    {
        unset($this->requestOption[$index]);
    }

    /**
     * Gets as requestOption
     *
     * @return string[]
     */
    public function getRequestOption()
    {
        return $this->requestOption;
    }

    /**
     * Sets a new requestOption
     *
     * @param string[] $requestOption
     * @return self
     */
    public function setRequestOption(array $requestOption)
    {
        $this->requestOption = $requestOption;
        return $this;
    }

    /**
     * Gets as subVersion
     *
     * @return string
     */
    public function getSubVersion()
    {
        return $this->subVersion;
    }

    /**
     * Sets a new subVersion
     *
     * @param string $subVersion
     * @return self
     */
    public function setSubVersion($subVersion)
    {
        $this->subVersion = $subVersion;
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

