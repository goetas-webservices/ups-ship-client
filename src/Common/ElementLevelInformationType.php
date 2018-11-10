<?php

namespace GoetasWebservices\Client\UPS\Common;

/**
 * Class representing ElementLevelInformationType
 *
 *
 * XSD Type: ElementLevelInformationType
 */
class ElementLevelInformationType
{

    /**
     * @property string $level
     */
    private $level = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Common\ElementIdentifierType[] $elementIdentifier
     */
    private $elementIdentifier = [
        
    ];

    /**
     * Gets as level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Sets a new level
     *
     * @param string $level
     * @return self
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * Adds as elementIdentifier
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Common\ElementIdentifierType $elementIdentifier
     */
    public function addToElementIdentifier(\GoetasWebservices\Client\UPS\Common\ElementIdentifierType $elementIdentifier)
    {
        $this->elementIdentifier[] = $elementIdentifier;
        return $this;
    }

    /**
     * isset elementIdentifier
     *
     * @param int|string $index
     * @return bool
     */
    public function issetElementIdentifier($index)
    {
        return isset($this->elementIdentifier[$index]);
    }

    /**
     * unset elementIdentifier
     *
     * @param int|string $index
     * @return void
     */
    public function unsetElementIdentifier($index)
    {
        unset($this->elementIdentifier[$index]);
    }

    /**
     * Gets as elementIdentifier
     *
     * @return \GoetasWebservices\Client\UPS\Common\ElementIdentifierType[]
     */
    public function getElementIdentifier()
    {
        return $this->elementIdentifier;
    }

    /**
     * Sets a new elementIdentifier
     *
     * @param \GoetasWebservices\Client\UPS\Common\ElementIdentifierType[] $elementIdentifier
     * @return self
     */
    public function setElementIdentifier(array $elementIdentifier)
    {
        $this->elementIdentifier = $elementIdentifier;
        return $this;
    }


}

