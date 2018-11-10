<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing LocaleType
 *
 *
 * XSD Type: LocaleType
 */
class LocaleType
{

    /**
     * @property string $language
     */
    private $language = null;

    /**
     * @property string $dialect
     */
    private $dialect = null;

    /**
     * Gets as language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as dialect
     *
     * @return string
     */
    public function getDialect()
    {
        return $this->dialect;
    }

    /**
     * Sets a new dialect
     *
     * @param string $dialect
     * @return self
     */
    public function setDialect($dialect)
    {
        $this->dialect = $dialect;
        return $this;
    }


}

