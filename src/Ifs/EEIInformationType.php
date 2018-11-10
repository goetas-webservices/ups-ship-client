<?php

namespace GoetasWebservices\Client\UPS\Ifs;

/**
 * Class representing EEIInformationType
 *
 *
 * XSD Type: EEIInformationType
 */
class EEIInformationType
{

    /**
     * @property string $exportInformation
     */
    private $exportInformation = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\EEILicenseType $license
     */
    private $license = null;

    /**
     * @property \GoetasWebservices\Client\UPS\Ifs\DDTCInformationType $dDTCInformation
     */
    private $dDTCInformation = null;

    /**
     * Gets as exportInformation
     *
     * @return string
     */
    public function getExportInformation()
    {
        return $this->exportInformation;
    }

    /**
     * Sets a new exportInformation
     *
     * @param string $exportInformation
     * @return self
     */
    public function setExportInformation($exportInformation)
    {
        $this->exportInformation = $exportInformation;
        return $this;
    }

    /**
     * Gets as license
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\EEILicenseType
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Sets a new license
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\EEILicenseType $license
     * @return self
     */
    public function setLicense(\GoetasWebservices\Client\UPS\Ifs\EEILicenseType $license)
    {
        $this->license = $license;
        return $this;
    }

    /**
     * Gets as dDTCInformation
     *
     * @return \GoetasWebservices\Client\UPS\Ifs\DDTCInformationType
     */
    public function getDDTCInformation()
    {
        return $this->dDTCInformation;
    }

    /**
     * Sets a new dDTCInformation
     *
     * @param \GoetasWebservices\Client\UPS\Ifs\DDTCInformationType $dDTCInformation
     * @return self
     */
    public function setDDTCInformation(\GoetasWebservices\Client\UPS\Ifs\DDTCInformationType $dDTCInformation)
    {
        $this->dDTCInformation = $dDTCInformation;
        return $this;
    }


}

