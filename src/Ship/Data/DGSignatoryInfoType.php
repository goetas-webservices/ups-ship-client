<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing DGSignatoryInfoType
 *
 *
 * XSD Type: DGSignatoryInfoType
 */
class DGSignatoryInfoType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $title
     */
    private $title = null;

    /**
     * @property string $place
     */
    private $place = null;

    /**
     * @property string $date
     */
    private $date = null;

    /**
     * @property string $shipperDeclaration
     */
    private $shipperDeclaration = null;

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Sets a new place
     *
     * @param string $place
     * @return self
     */
    public function setPlace($place)
    {
        $this->place = $place;
        return $this;
    }

    /**
     * Gets as date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * @param string $date
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as shipperDeclaration
     *
     * @return string
     */
    public function getShipperDeclaration()
    {
        return $this->shipperDeclaration;
    }

    /**
     * Sets a new shipperDeclaration
     *
     * @param string $shipperDeclaration
     * @return self
     */
    public function setShipperDeclaration($shipperDeclaration)
    {
        $this->shipperDeclaration = $shipperDeclaration;
        return $this;
    }


}

