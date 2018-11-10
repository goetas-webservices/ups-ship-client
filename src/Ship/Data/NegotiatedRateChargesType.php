<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing NegotiatedRateChargesType
 *
 *
 * XSD Type: NegotiatedRateChargesType
 */
class NegotiatedRateChargesType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType[] $itemizedCharges
     */
    private $itemizedCharges = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\TaxChargeType[] $taxCharges
     */
    private $taxCharges = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $totalCharge
     */
    private $totalCharge = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $totalChargesWithTaxes
     */
    private $totalChargesWithTaxes = null;

    /**
     * Adds as itemizedCharges
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $itemizedCharges
     */
    public function addToItemizedCharges(\GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $itemizedCharges)
    {
        $this->itemizedCharges[] = $itemizedCharges;
        return $this;
    }

    /**
     * isset itemizedCharges
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemizedCharges($index)
    {
        return isset($this->itemizedCharges[$index]);
    }

    /**
     * unset itemizedCharges
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemizedCharges($index)
    {
        unset($this->itemizedCharges[$index]);
    }

    /**
     * Gets as itemizedCharges
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType[]
     */
    public function getItemizedCharges()
    {
        return $this->itemizedCharges;
    }

    /**
     * Sets a new itemizedCharges
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType[] $itemizedCharges
     * @return self
     */
    public function setItemizedCharges(array $itemizedCharges)
    {
        $this->itemizedCharges = $itemizedCharges;
        return $this;
    }

    /**
     * Adds as taxCharges
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ship\Data\TaxChargeType $taxCharges
     */
    public function addToTaxCharges(\GoetasWebservices\Client\UPS\Ship\Data\TaxChargeType $taxCharges)
    {
        $this->taxCharges[] = $taxCharges;
        return $this;
    }

    /**
     * isset taxCharges
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxCharges($index)
    {
        return isset($this->taxCharges[$index]);
    }

    /**
     * unset taxCharges
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxCharges($index)
    {
        unset($this->taxCharges[$index]);
    }

    /**
     * Gets as taxCharges
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\TaxChargeType[]
     */
    public function getTaxCharges()
    {
        return $this->taxCharges;
    }

    /**
     * Sets a new taxCharges
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\TaxChargeType[] $taxCharges
     * @return self
     */
    public function setTaxCharges(array $taxCharges)
    {
        $this->taxCharges = $taxCharges;
        return $this;
    }

    /**
     * Gets as totalCharge
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType
     */
    public function getTotalCharge()
    {
        return $this->totalCharge;
    }

    /**
     * Sets a new totalCharge
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $totalCharge
     * @return self
     */
    public function setTotalCharge(\GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $totalCharge)
    {
        $this->totalCharge = $totalCharge;
        return $this;
    }

    /**
     * Gets as totalChargesWithTaxes
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType
     */
    public function getTotalChargesWithTaxes()
    {
        return $this->totalChargesWithTaxes;
    }

    /**
     * Sets a new totalChargesWithTaxes
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $totalChargesWithTaxes
     * @return self
     */
    public function setTotalChargesWithTaxes(\GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $totalChargesWithTaxes)
    {
        $this->totalChargesWithTaxes = $totalChargesWithTaxes;
        return $this;
    }


}

