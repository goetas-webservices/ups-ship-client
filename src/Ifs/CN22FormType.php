<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing CN22FormType
 *
 *
 * XSD Type: CN22FormType
 */
class CN22FormType
{

    /**
     * @property string $labelSize
     */
    private $labelSize = null;

    /**
     * @property string $printsPerPage
     */
    private $printsPerPage = null;

    /**
     * @property string $labelPrintType
     */
    private $labelPrintType = null;

    /**
     * @property string $cN22Type
     */
    private $cN22Type = null;

    /**
     * @property string $cN22OtherDescription
     */
    private $cN22OtherDescription = null;

    /**
     * @property string $foldHereText
     */
    private $foldHereText = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\CN22ContentType[] $cN22Content
     */
    private $cN22Content = [
        
    ];

    /**
     * Gets as labelSize
     *
     * @return string
     */
    public function getLabelSize()
    {
        return $this->labelSize;
    }

    /**
     * Sets a new labelSize
     *
     * @param string $labelSize
     * @return self
     */
    public function setLabelSize($labelSize)
    {
        $this->labelSize = $labelSize;
        return $this;
    }

    /**
     * Gets as printsPerPage
     *
     * @return string
     */
    public function getPrintsPerPage()
    {
        return $this->printsPerPage;
    }

    /**
     * Sets a new printsPerPage
     *
     * @param string $printsPerPage
     * @return self
     */
    public function setPrintsPerPage($printsPerPage)
    {
        $this->printsPerPage = $printsPerPage;
        return $this;
    }

    /**
     * Gets as labelPrintType
     *
     * @return string
     */
    public function getLabelPrintType()
    {
        return $this->labelPrintType;
    }

    /**
     * Sets a new labelPrintType
     *
     * @param string $labelPrintType
     * @return self
     */
    public function setLabelPrintType($labelPrintType)
    {
        $this->labelPrintType = $labelPrintType;
        return $this;
    }

    /**
     * Gets as cN22Type
     *
     * @return string
     */
    public function getCN22Type()
    {
        return $this->cN22Type;
    }

    /**
     * Sets a new cN22Type
     *
     * @param string $cN22Type
     * @return self
     */
    public function setCN22Type($cN22Type)
    {
        $this->cN22Type = $cN22Type;
        return $this;
    }

    /**
     * Gets as cN22OtherDescription
     *
     * @return string
     */
    public function getCN22OtherDescription()
    {
        return $this->cN22OtherDescription;
    }

    /**
     * Sets a new cN22OtherDescription
     *
     * @param string $cN22OtherDescription
     * @return self
     */
    public function setCN22OtherDescription($cN22OtherDescription)
    {
        $this->cN22OtherDescription = $cN22OtherDescription;
        return $this;
    }

    /**
     * Gets as foldHereText
     *
     * @return string
     */
    public function getFoldHereText()
    {
        return $this->foldHereText;
    }

    /**
     * Sets a new foldHereText
     *
     * @param string $foldHereText
     * @return self
     */
    public function setFoldHereText($foldHereText)
    {
        $this->foldHereText = $foldHereText;
        return $this;
    }

    /**
     * Adds as cN22Content
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ifs\CN22ContentType $cN22Content
     */
    public function addToCN22Content(\GoetasWebservices\Client\UPS\Ifs\CN22ContentType $cN22Content)
    {
        $this->cN22Content[] = $cN22Content;
        return $this;
    }

    /**
     * isset cN22Content
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCN22Content($index)
    {
        return isset($this->cN22Content[$index]);
    }

    /**
     * unset cN22Content
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCN22Content($index)
    {
        unset($this->cN22Content[$index]);
    }

    /**
     * Gets as cN22Content
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\CN22ContentType[]
     */
    public function getCN22Content()
    {
        return $this->cN22Content;
    }

    /**
     * Sets a new cN22Content
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\CN22ContentType[] $cN22Content
     * @return self
     */
    public function setCN22Content(array $cN22Content)
    {
        $this->cN22Content = $cN22Content;
        return $this;
    }


}

