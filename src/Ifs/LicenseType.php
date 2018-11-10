<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing LicenseType
 *
 *
 * XSD Type: LicenseType
 */
class LicenseType
{

    /**
     * @property string $number
     */
    private $number = null;

    /**
     * @property string $date
     */
    private $date = null;

    /**
     * @property string $exceptionCode
     */
    private $exceptionCode = null;

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
     * Gets as exceptionCode
     *
     * @return string
     */
    public function getExceptionCode()
    {
        return $this->exceptionCode;
    }

    /**
     * Sets a new exceptionCode
     *
     * @param string $exceptionCode
     * @return self
     */
    public function setExceptionCode($exceptionCode)
    {
        $this->exceptionCode = $exceptionCode;
        return $this;
    }


}

