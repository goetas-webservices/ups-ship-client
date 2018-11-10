<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing FreightCollectType
 *
 *
 * XSD Type: FreightCollectType
 */
class FreightCollectType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\BillReceiverType $billReceiver
     */
    private $billReceiver = null;

    /**
     * Gets as billReceiver
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\BillReceiverType
     */
    public function getBillReceiver()
    {
        return $this->billReceiver;
    }

    /**
     * Sets a new billReceiver
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\BillReceiverType $billReceiver
     * @return self
     */
    public function setBillReceiver(\GoetasWebservices\Client\UPS\Ship\Data\BillReceiverType $billReceiver)
    {
        $this->billReceiver = $billReceiver;
        return $this;
    }


}

