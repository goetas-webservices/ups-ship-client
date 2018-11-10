<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing ScheduleBType
 *
 *
 * XSD Type: ScheduleBType
 */
class ScheduleBType
{

    /**
     * @property string $number
     */
    private $number = null;

    /**
     * @property string[] $quantity
     */
    private $quantity = [
        
    ];

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\UnitOfMeasurementType[] $unitOfMeasurement
     */
    private $unitOfMeasurement = [
        
    ];

    /**
     * Gets as number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Adds as quantity
     *
     * @return self
     * @param string $quantity
     */
    public function addToQuantity($quantity)
    {
        $this->quantity[] = $quantity;
        return $this;
    }

    /**
     * isset quantity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQuantity($index)
    {
        return isset($this->quantity[$index]);
    }

    /**
     * unset quantity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQuantity($index)
    {
        unset($this->quantity[$index]);
    }

    /**
     * Gets as quantity
     *
     * @return string[]
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * @param string[] $quantity
     * @return self
     */
    public function setQuantity(array $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Adds as unitOfMeasurement
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ifs\UnitOfMeasurementType $unitOfMeasurement
     */
    public function addToUnitOfMeasurement(\GoetasWebservices\Client\UPS\Ifs\UnitOfMeasurementType $unitOfMeasurement)
    {
        $this->unitOfMeasurement[] = $unitOfMeasurement;
        return $this;
    }

    /**
     * isset unitOfMeasurement
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUnitOfMeasurement($index)
    {
        return isset($this->unitOfMeasurement[$index]);
    }

    /**
     * unset unitOfMeasurement
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUnitOfMeasurement($index)
    {
        unset($this->unitOfMeasurement[$index]);
    }

    /**
     * Gets as unitOfMeasurement
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\UnitOfMeasurementType[]
     */
    public function getUnitOfMeasurement()
    {
        return $this->unitOfMeasurement;
    }

    /**
     * Sets a new unitOfMeasurement
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\UnitOfMeasurementType[] $unitOfMeasurement
     * @return self
     */
    public function setUnitOfMeasurement(array $unitOfMeasurement)
    {
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }


}

