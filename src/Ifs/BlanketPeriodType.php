<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing BlanketPeriodType
 *
 *
 * XSD Type: BlanketPeriodType
 */
class BlanketPeriodType
{

    /**
     * @property string $beginDate
     */
    private $beginDate = null;

    /**
     * @property string $endDate
     */
    private $endDate = null;

    /**
     * Gets as beginDate
     *
     * @return string
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * Sets a new beginDate
     *
     * @param string $beginDate
     * @return self
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * @param string $endDate
     * @return self
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }


}

