<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing ShipmentChargesType
 *
 *
 * XSD Type: ShipmentChargesType
 */
class ShipmentChargesType
{

    /**
     * @property string $rateChart
     */
    private $rateChart = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $baseServiceCharge
     */
    private $baseServiceCharge = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $transportationCharges
     */
    private $transportationCharges = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType[] $itemizedCharges
     */
    private $itemizedCharges = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $serviceOptionsCharges
     */
    private $serviceOptionsCharges = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\TaxChargeType[] $taxCharges
     */
    private $taxCharges = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $totalCharges
     */
    private $totalCharges = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $totalChargesWithTaxes
     */
    private $totalChargesWithTaxes = null;

    /**
     * Gets as rateChart
     *
     * @return string
     */
    public function getRateChart()
    {
        return $this->rateChart;
    }

    /**
     * Sets a new rateChart
     *
     * @param string $rateChart
     * @return self
     */
    public function setRateChart($rateChart)
    {
        $this->rateChart = $rateChart;
        return $this;
    }

    /**
     * Gets as baseServiceCharge
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType
     */
    public function getBaseServiceCharge()
    {
        return $this->baseServiceCharge;
    }

    /**
     * Sets a new baseServiceCharge
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $baseServiceCharge
     * @return self
     */
    public function setBaseServiceCharge(\GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $baseServiceCharge)
    {
        $this->baseServiceCharge = $baseServiceCharge;
        return $this;
    }

    /**
     * Gets as transportationCharges
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType
     */
    public function getTransportationCharges()
    {
        return $this->transportationCharges;
    }

    /**
     * Sets a new transportationCharges
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $transportationCharges
     * @return self
     */
    public function setTransportationCharges(\GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $transportationCharges)
    {
        $this->transportationCharges = $transportationCharges;
        return $this;
    }

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
     * Gets as serviceOptionsCharges
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType
     */
    public function getServiceOptionsCharges()
    {
        return $this->serviceOptionsCharges;
    }

    /**
     * Sets a new serviceOptionsCharges
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $serviceOptionsCharges
     * @return self
     */
    public function setServiceOptionsCharges(\GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $serviceOptionsCharges)
    {
        $this->serviceOptionsCharges = $serviceOptionsCharges;
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
     * Gets as totalCharges
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType
     */
    public function getTotalCharges()
    {
        return $this->totalCharges;
    }

    /**
     * Sets a new totalCharges
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $totalCharges
     * @return self
     */
    public function setTotalCharges(\GoetasWebservices\Client\UPS\Ship\Data\ShipChargeType $totalCharges)
    {
        $this->totalCharges = $totalCharges;
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

