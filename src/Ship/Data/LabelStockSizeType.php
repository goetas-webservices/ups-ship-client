<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing LabelStockSizeType
 *
 *
 * XSD Type: LabelStockSizeType
 */
class LabelStockSizeType
{

    /**
     * @property string $height
     */
    private $height = null;

    /**
     * @property string $width
     */
    private $width = null;

    /**
     * Gets as height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * @param string $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Gets as width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * @param string $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }


}

