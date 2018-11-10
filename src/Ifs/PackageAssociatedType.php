<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing PackageAssociatedType
 *
 *
 * XSD Type: PackageAssociatedType
 */
class PackageAssociatedType
{

    /**
     * @property string $packageNumber
     */
    private $packageNumber = null;

    /**
     * @property string $productAmount
     */
    private $productAmount = null;

    /**
     * Gets as packageNumber
     *
     * @return string
     */
    public function getPackageNumber()
    {
        return $this->packageNumber;
    }

    /**
     * Sets a new packageNumber
     *
     * @param string $packageNumber
     * @return self
     */
    public function setPackageNumber($packageNumber)
    {
        $this->packageNumber = $packageNumber;
        return $this;
    }

    /**
     * Gets as productAmount
     *
     * @return string
     */
    public function getProductAmount()
    {
        return $this->productAmount;
    }

    /**
     * Sets a new productAmount
     *
     * @param string $productAmount
     * @return self
     */
    public function setProductAmount($productAmount)
    {
        $this->productAmount = $productAmount;
        return $this;
    }


}

