<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing RateInfoType
 *
 *
 * XSD Type: RateInfoType
 */
class RateInfoType
{

    /**
     * @property string $negotiatedRatesIndicator
     */
    private $negotiatedRatesIndicator = null;

    /**
     * @property string $fRSShipmentIndicator
     */
    private $fRSShipmentIndicator = null;

    /**
     * @property string $rateChartIndicator
     */
    private $rateChartIndicator = null;

    /**
     * @property string $tPFCNegotiatedRatesIndicator
     */
    private $tPFCNegotiatedRatesIndicator = null;

    /**
     * @property string $userLevelDiscountIndicator
     */
    private $userLevelDiscountIndicator = null;

    /**
     * Gets as negotiatedRatesIndicator
     *
     * @return string
     */
    public function getNegotiatedRatesIndicator()
    {
        return $this->negotiatedRatesIndicator;
    }

    /**
     * Sets a new negotiatedRatesIndicator
     *
     * @param string $negotiatedRatesIndicator
     * @return self
     */
    public function setNegotiatedRatesIndicator($negotiatedRatesIndicator)
    {
        $this->negotiatedRatesIndicator = $negotiatedRatesIndicator;
        return $this;
    }

    /**
     * Gets as fRSShipmentIndicator
     *
     * @return string
     */
    public function getFRSShipmentIndicator()
    {
        return $this->fRSShipmentIndicator;
    }

    /**
     * Sets a new fRSShipmentIndicator
     *
     * @param string $fRSShipmentIndicator
     * @return self
     */
    public function setFRSShipmentIndicator($fRSShipmentIndicator)
    {
        $this->fRSShipmentIndicator = $fRSShipmentIndicator;
        return $this;
    }

    /**
     * Gets as rateChartIndicator
     *
     * @return string
     */
    public function getRateChartIndicator()
    {
        return $this->rateChartIndicator;
    }

    /**
     * Sets a new rateChartIndicator
     *
     * @param string $rateChartIndicator
     * @return self
     */
    public function setRateChartIndicator($rateChartIndicator)
    {
        $this->rateChartIndicator = $rateChartIndicator;
        return $this;
    }

    /**
     * Gets as tPFCNegotiatedRatesIndicator
     *
     * @return string
     */
    public function getTPFCNegotiatedRatesIndicator()
    {
        return $this->tPFCNegotiatedRatesIndicator;
    }

    /**
     * Sets a new tPFCNegotiatedRatesIndicator
     *
     * @param string $tPFCNegotiatedRatesIndicator
     * @return self
     */
    public function setTPFCNegotiatedRatesIndicator($tPFCNegotiatedRatesIndicator)
    {
        $this->tPFCNegotiatedRatesIndicator = $tPFCNegotiatedRatesIndicator;
        return $this;
    }

    /**
     * Gets as userLevelDiscountIndicator
     *
     * @return string
     */
    public function getUserLevelDiscountIndicator()
    {
        return $this->userLevelDiscountIndicator;
    }

    /**
     * Sets a new userLevelDiscountIndicator
     *
     * @param string $userLevelDiscountIndicator
     * @return self
     */
    public function setUserLevelDiscountIndicator($userLevelDiscountIndicator)
    {
        $this->userLevelDiscountIndicator = $userLevelDiscountIndicator;
        return $this;
    }


}

