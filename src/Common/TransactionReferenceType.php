<?php

namespace GoetasWebservices\Client\UPS\Common;

/**
 * Class representing TransactionReferenceType
 *
 *
 * XSD Type: TransactionReferenceType
 */
class TransactionReferenceType
{

    /**
     * @property string $customerContext
     */
    private $customerContext = null;

    /**
     * @property string $transactionIdentifier
     */
    private $transactionIdentifier = null;

    /**
     * Gets as customerContext
     *
     * @return string
     */
    public function getCustomerContext()
    {
        return $this->customerContext;
    }

    /**
     * Sets a new customerContext
     *
     * @param string $customerContext
     * @return self
     */
    public function setCustomerContext($customerContext)
    {
        $this->customerContext = $customerContext;
        return $this;
    }

    /**
     * Gets as transactionIdentifier
     *
     * @return string
     */
    public function getTransactionIdentifier()
    {
        return $this->transactionIdentifier;
    }

    /**
     * Sets a new transactionIdentifier
     *
     * @param string $transactionIdentifier
     * @return self
     */
    public function setTransactionIdentifier($transactionIdentifier)
    {
        $this->transactionIdentifier = $transactionIdentifier;
        return $this;
    }


}

