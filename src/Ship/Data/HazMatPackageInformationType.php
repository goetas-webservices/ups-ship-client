<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing HazMatPackageInformationType
 *
 *
 * XSD Type: HazMatPackageInformationType
 */
class HazMatPackageInformationType
{

    /**
     * @property string $allPackedInOneIndicator
     */
    private $allPackedInOneIndicator = null;

    /**
     * @property string $overPackedIndicator
     */
    private $overPackedIndicator = null;

    /**
     * @property string $qValue
     */
    private $qValue = null;

    /**
     * Gets as allPackedInOneIndicator
     *
     * @return string
     */
    public function getAllPackedInOneIndicator()
    {
        return $this->allPackedInOneIndicator;
    }

    /**
     * Sets a new allPackedInOneIndicator
     *
     * @param string $allPackedInOneIndicator
     * @return self
     */
    public function setAllPackedInOneIndicator($allPackedInOneIndicator)
    {
        $this->allPackedInOneIndicator = $allPackedInOneIndicator;
        return $this;
    }

    /**
     * Gets as overPackedIndicator
     *
     * @return string
     */
    public function getOverPackedIndicator()
    {
        return $this->overPackedIndicator;
    }

    /**
     * Sets a new overPackedIndicator
     *
     * @param string $overPackedIndicator
     * @return self
     */
    public function setOverPackedIndicator($overPackedIndicator)
    {
        $this->overPackedIndicator = $overPackedIndicator;
        return $this;
    }

    /**
     * Gets as qValue
     *
     * @return string
     */
    public function getQValue()
    {
        return $this->qValue;
    }

    /**
     * Sets a new qValue
     *
     * @param string $qValue
     * @return self
     */
    public function setQValue($qValue)
    {
        $this->qValue = $qValue;
        return $this;
    }


}

