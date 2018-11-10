<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing FormType
 *
 *
 * XSD Type: FormType
 */
class FormType
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
     * @property \GoetasWebservices\Client\UPS\Ship\Data\FormImageType $image
     */
    private $image = null;

    /**
     * @property string $formGroupId
     */
    private $formGroupId = null;

    /**
     * @property string $formGroupIdName
     */
    private $formGroupIdName = null;

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
     * Gets as image
     *
     * @return \GoetasWebservices\Client\UPS\Ship\Data\FormImageType
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * @param \GoetasWebservices\Client\UPS\Ship\Data\FormImageType $image
     * @return self
     */
    public function setImage(\GoetasWebservices\Client\UPS\Ship\Data\FormImageType $image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Gets as formGroupId
     *
     * @return string
     */
    public function getFormGroupId()
    {
        return $this->formGroupId;
    }

    /**
     * Sets a new formGroupId
     *
     * @param string $formGroupId
     * @return self
     */
    public function setFormGroupId($formGroupId)
    {
        $this->formGroupId = $formGroupId;
        return $this;
    }

    /**
     * Gets as formGroupIdName
     *
     * @return string
     */
    public function getFormGroupIdName()
    {
        return $this->formGroupIdName;
    }

    /**
     * Sets a new formGroupIdName
     *
     * @param string $formGroupIdName
     * @return self
     */
    public function setFormGroupIdName($formGroupIdName)
    {
        $this->formGroupIdName = $formGroupIdName;
        return $this;
    }


}

