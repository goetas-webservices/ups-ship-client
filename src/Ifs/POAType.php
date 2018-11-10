<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing POAType
 *
 *
 * XSD Type: POAType
 */
class POAType
{

    /**
     * @property string $code
     */
    private $code = null;

    /**
     * @property string $description
     */
    private $description = null;

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
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

