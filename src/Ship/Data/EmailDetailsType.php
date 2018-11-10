<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing EmailDetailsType
 *
 *
 * XSD Type: EmailDetailsType
 */
class EmailDetailsType
{

    /**
     * @property string[] $eMailAddress
     */
    private $eMailAddress = [
        
    ];

    /**
     * @property string $undeliverableEMailAddress
     */
    private $undeliverableEMailAddress = null;

    /**
     * @property string $fromEMailAddress
     */
    private $fromEMailAddress = null;

    /**
     * @property string $fromName
     */
    private $fromName = null;

    /**
     * @property string $memo
     */
    private $memo = null;

    /**
     * @property string $subject
     */
    private $subject = null;

    /**
     * @property string $subjectCode
     */
    private $subjectCode = null;

    /**
     * Adds as eMailAddress
     *
     * @return self
     * @param string $eMailAddress
     */
    public function addToEMailAddress($eMailAddress)
    {
        $this->eMailAddress[] = $eMailAddress;
        return $this;
    }

    /**
     * isset eMailAddress
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEMailAddress($index)
    {
        return isset($this->eMailAddress[$index]);
    }

    /**
     * unset eMailAddress
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEMailAddress($index)
    {
        unset($this->eMailAddress[$index]);
    }

    /**
     * Gets as eMailAddress
     *
     * @return string[]
     */
    public function getEMailAddress()
    {
        return $this->eMailAddress;
    }

    /**
     * Sets a new eMailAddress
     *
     * @param string[] $eMailAddress
     * @return self
     */
    public function setEMailAddress(array $eMailAddress)
    {
        $this->eMailAddress = $eMailAddress;
        return $this;
    }

    /**
     * Gets as undeliverableEMailAddress
     *
     * @return string
     */
    public function getUndeliverableEMailAddress()
    {
        return $this->undeliverableEMailAddress;
    }

    /**
     * Sets a new undeliverableEMailAddress
     *
     * @param string $undeliverableEMailAddress
     * @return self
     */
    public function setUndeliverableEMailAddress($undeliverableEMailAddress)
    {
        $this->undeliverableEMailAddress = $undeliverableEMailAddress;
        return $this;
    }

    /**
     * Gets as fromEMailAddress
     *
     * @return string
     */
    public function getFromEMailAddress()
    {
        return $this->fromEMailAddress;
    }

    /**
     * Sets a new fromEMailAddress
     *
     * @param string $fromEMailAddress
     * @return self
     */
    public function setFromEMailAddress($fromEMailAddress)
    {
        $this->fromEMailAddress = $fromEMailAddress;
        return $this;
    }

    /**
     * Gets as fromName
     *
     * @return string
     */
    public function getFromName()
    {
        return $this->fromName;
    }

    /**
     * Sets a new fromName
     *
     * @param string $fromName
     * @return self
     */
    public function setFromName($fromName)
    {
        $this->fromName = $fromName;
        return $this;
    }

    /**
     * Gets as memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Sets a new memo
     *
     * @param string $memo
     * @return self
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Gets as subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * @param string $subject
     * @return self
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as subjectCode
     *
     * @return string
     */
    public function getSubjectCode()
    {
        return $this->subjectCode;
    }

    /**
     * Sets a new subjectCode
     *
     * @param string $subjectCode
     * @return self
     */
    public function setSubjectCode($subjectCode)
    {
        $this->subjectCode = $subjectCode;
        return $this;
    }


}

