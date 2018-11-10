<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing ContactType
 *
 *
 * XSD Type: ContactType
 */
class ContactType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\ForwardAgentType $forwardAgent
     */
    private $forwardAgent = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\UltimateConsigneeType $ultimateConsignee
     */
    private $ultimateConsignee = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\IntermediateConsigneeType $intermediateConsignee
     */
    private $intermediateConsignee = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\ProducerType $producer
     */
    private $producer = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\SoldToType $soldTo
     */
    private $soldTo = null;

    /**
     * Gets as forwardAgent
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\ForwardAgentType
     */
    public function getForwardAgent()
    {
        return $this->forwardAgent;
    }

    /**
     * Sets a new forwardAgent
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\ForwardAgentType $forwardAgent
     * @return self
     */
    public function setForwardAgent(\GoetasWebservices\Client\UPS\Ifs\ForwardAgentType $forwardAgent)
    {
        $this->forwardAgent = $forwardAgent;
        return $this;
    }

    /**
     * Gets as ultimateConsignee
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\UltimateConsigneeType
     */
    public function getUltimateConsignee()
    {
        return $this->ultimateConsignee;
    }

    /**
     * Sets a new ultimateConsignee
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\UltimateConsigneeType $ultimateConsignee
     * @return self
     */
    public function setUltimateConsignee(\GoetasWebservices\Client\UPS\Ifs\UltimateConsigneeType $ultimateConsignee)
    {
        $this->ultimateConsignee = $ultimateConsignee;
        return $this;
    }

    /**
     * Gets as intermediateConsignee
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\IntermediateConsigneeType
     */
    public function getIntermediateConsignee()
    {
        return $this->intermediateConsignee;
    }

    /**
     * Sets a new intermediateConsignee
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\IntermediateConsigneeType $intermediateConsignee
     * @return self
     */
    public function setIntermediateConsignee(\GoetasWebservices\Client\UPS\Ifs\IntermediateConsigneeType $intermediateConsignee)
    {
        $this->intermediateConsignee = $intermediateConsignee;
        return $this;
    }

    /**
     * Gets as producer
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\ProducerType
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * Sets a new producer
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\ProducerType $producer
     * @return self
     */
    public function setProducer(\GoetasWebservices\Client\UPS\Ifs\ProducerType $producer)
    {
        $this->producer = $producer;
        return $this;
    }

    /**
     * Gets as soldTo
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\SoldToType
     */
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * Sets a new soldTo
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\SoldToType $soldTo
     * @return self
     */
    public function setSoldTo(\GoetasWebservices\Client\UPS\Ifs\SoldToType $soldTo)
    {
        $this->soldTo = $soldTo;
        return $this;
    }


}

