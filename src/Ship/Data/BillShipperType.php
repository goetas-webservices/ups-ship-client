<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing BillShipperType
 *
 *
 * XSD Type: BillShipperType
 */
class BillShipperType
{

    /**
     * @property string $accountNumber
     */
    private $accountNumber = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\CreditCardType $creditCard
     */
    private $creditCard = null;

    /**
     * @property string $alternatePaymentMethod
     */
    private $alternatePaymentMethod = null;

    /**
     * Gets as accountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Sets a new accountNumber
     *
     * @param string $accountNumber
     * @return self
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * Gets as creditCard
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\CreditCardType
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * Sets a new creditCard
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\CreditCardType $creditCard
     * @return self
     */
    public function setCreditCard(\GoetasWebservices\Client\UPS\Ship\Data\CreditCardType $creditCard)
    {
        $this->creditCard = $creditCard;
        return $this;
    }

    /**
     * Gets as alternatePaymentMethod
     *
     * @return string
     */
    public function getAlternatePaymentMethod()
    {
        return $this->alternatePaymentMethod;
    }

    /**
     * Sets a new alternatePaymentMethod
     *
     * @param string $alternatePaymentMethod
     * @return self
     */
    public function setAlternatePaymentMethod($alternatePaymentMethod)
    {
        $this->alternatePaymentMethod = $alternatePaymentMethod;
        return $this;
    }


}

