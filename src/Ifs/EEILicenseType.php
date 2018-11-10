<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing EEILicenseType
 *
 *
 * XSD Type: EEILicenseType
 */
class EEILicenseType
{

    /**
     * @property string $number
     */
    private $number = null;

    /**
     * @property string $code
     */
    private $code = null;

    /**
     * @property string $licenseLineValue
     */
    private $licenseLineValue = null;

    /**
     * @property string $eCCNNumber
     */
    private $eCCNNumber = null;

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
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as licenseLineValue
     *
     * @return string
     */
    public function getLicenseLineValue()
    {
        return $this->licenseLineValue;
    }

    /**
     * Sets a new licenseLineValue
     *
     * @param string $licenseLineValue
     * @return self
     */
    public function setLicenseLineValue($licenseLineValue)
    {
        $this->licenseLineValue = $licenseLineValue;
        return $this;
    }

    /**
     * Gets as eCCNNumber
     *
     * @return string
     */
    public function getECCNNumber()
    {
        return $this->eCCNNumber;
    }

    /**
     * Sets a new eCCNNumber
     *
     * @param string $eCCNNumber
     * @return self
     */
    public function setECCNNumber($eCCNNumber)
    {
        $this->eCCNNumber = $eCCNNumber;
        return $this;
    }


}

