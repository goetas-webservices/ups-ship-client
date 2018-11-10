<?php

namespace GoetasWebservices\Client\UPS\Error;

/**
 * Class representing CodeType
 *
 *
 * XSD Type: CodeType
 */
class CodeType
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
     * @property string $digest
     */
    private $digest = null;

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

    /**
     * Gets as digest
     *
     * @return string
     */
    public function getDigest()
    {
        return $this->digest;
    }

    /**
     * Sets a new digest
     *
     * @param string $digest
     * @return self
     */
    public function setDigest($digest)
    {
        $this->digest = $digest;
        return $this;
    }


}

