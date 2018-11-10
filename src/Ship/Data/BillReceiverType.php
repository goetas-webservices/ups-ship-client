<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing BillReceiverType
 *
 *
 * XSD Type: BillReceiverType
 */
class BillReceiverType
{

    /**
     * @property string $accountNumber
     */
    private $accountNumber = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\BillReceiverAddressType $address
     */
    private $address = null;

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
     * Gets as address
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\BillReceiverAddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\BillReceiverAddressType $address
     * @return self
     */
    public function setAddress(\GoetasWebservices\Client\UPS\Ship\Data\BillReceiverAddressType $address)
    {
        $this->address = $address;
        return $this;
    }


}

