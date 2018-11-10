<?php

namespace GoetasWebservices\Client\UPS\Error;

/**
 * Class representing Errors
 */
class Errors
{

    /**
     * @property \GoetasWebservices\Client\UPS\Error\ErrorDetailType[] $errorDetail
     */
    private $errorDetail = [
        
    ];

    /**
     * Adds as errorDetail
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Error\ErrorDetailType $errorDetail
     */
    public function addToErrorDetail(\GoetasWebservices\Client\UPS\Error\ErrorDetailType $errorDetail)
    {
        $this->errorDetail[] = $errorDetail;
        return $this;
    }

    /**
     * isset errorDetail
     *
     * @param int|string $index
     * @return bool
     */
    public function issetErrorDetail($index)
    {
        return isset($this->errorDetail[$index]);
    }

    /**
     * unset errorDetail
     *
     * @param int|string $index
     * @return void
     */
    public function unsetErrorDetail($index)
    {
        unset($this->errorDetail[$index]);
    }

    /**
     * Gets as errorDetail
     *
     * @return \GoetasWebservices\Client\UPS\Error\ErrorDetailType[]
     */
    public function getErrorDetail()
    {
        return $this->errorDetail;
    }

    /**
     * Sets a new errorDetail
     *
     * @param \GoetasWebservices\Client\UPS\Error\ErrorDetailType[] $errorDetail
     * @return self
     */
    public function setErrorDetail(array $errorDetail)
    {
        $this->errorDetail = $errorDetail;
        return $this;
    }


}

