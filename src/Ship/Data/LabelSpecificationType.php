<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing LabelSpecificationType
 *
 *
 * XSD Type: LabelSpecificationType
 */
class LabelSpecificationType
{

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\LabelImageFormatType $labelImageFormat
     */
    private $labelImageFormat = null;

    /**
     * @property string $hTTPUserAgent
     */
    private $hTTPUserAgent = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\LabelStockSizeType $labelStockSize
     */
    private $labelStockSize = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ship\Data\InstructionCodeDescriptionType[] $instruction
     */
    private $instruction = [
        
    ];

    /**
     * @property string $characterSet
     */
    private $characterSet = null;

    /**
     * Gets as labelImageFormat
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\LabelImageFormatType
     */
    public function getLabelImageFormat()
    {
        return $this->labelImageFormat;
    }

    /**
     * Sets a new labelImageFormat
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\LabelImageFormatType $labelImageFormat
     * @return self
     */
    public function setLabelImageFormat(\GoetasWebservices\Client\UPS\Ship\Data\LabelImageFormatType $labelImageFormat)
    {
        $this->labelImageFormat = $labelImageFormat;
        return $this;
    }

    /**
     * Gets as hTTPUserAgent
     *
     * @return string
     */
    public function getHTTPUserAgent()
    {
        return $this->hTTPUserAgent;
    }

    /**
     * Sets a new hTTPUserAgent
     *
     * @param string $hTTPUserAgent
     * @return self
     */
    public function setHTTPUserAgent($hTTPUserAgent)
    {
        $this->hTTPUserAgent = $hTTPUserAgent;
        return $this;
    }

    /**
     * Gets as labelStockSize
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\LabelStockSizeType
     */
    public function getLabelStockSize()
    {
        return $this->labelStockSize;
    }

    /**
     * Sets a new labelStockSize
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\LabelStockSizeType $labelStockSize
     * @return self
     */
    public function setLabelStockSize(\GoetasWebservices\Client\UPS\Ship\Data\LabelStockSizeType $labelStockSize)
    {
        $this->labelStockSize = $labelStockSize;
        return $this;
    }

    /**
     * Adds as instruction
     *
     * @return self
     * @param \GoetasWebservices\Client\UPS\Ship\Data\InstructionCodeDescriptionType $instruction
     */
    public function addToInstruction(\GoetasWebservices\Client\UPS\Ship\Data\InstructionCodeDescriptionType $instruction)
    {
        $this->instruction[] = $instruction;
        return $this;
    }

    /**
     * isset instruction
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstruction($index)
    {
        return isset($this->instruction[$index]);
    }

    /**
     * unset instruction
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstruction($index)
    {
        unset($this->instruction[$index]);
    }

    /**
     * Gets as instruction
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\InstructionCodeDescriptionType[]
     */
    public function getInstruction()
    {
        return $this->instruction;
    }

    /**
     * Sets a new instruction
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\InstructionCodeDescriptionType[] $instruction
     * @return self
     */
    public function setInstruction(array $instruction)
    {
        $this->instruction = $instruction;
        return $this;
    }

    /**
     * Gets as characterSet
     *
     * @return string
     */
    public function getCharacterSet()
    {
        return $this->characterSet;
    }

    /**
     * Sets a new characterSet
     *
     * @param string $characterSet
     * @return self
     */
    public function setCharacterSet($characterSet)
    {
        $this->characterSet = $characterSet;
        return $this;
    }


}

