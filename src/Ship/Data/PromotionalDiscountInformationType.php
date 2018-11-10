<?php

namespace GoetasWebservices\Client\UPS\Ship\Data;

/**
 * Class representing PromotionalDiscountInformationType
 *
 *
 * XSD Type: PromotionalDiscountInformationType
 */
class PromotionalDiscountInformationType
{

    /**
     * @property string $promoCode
     */
    private $promoCode = null;

    /**
     * @property string $promoAliasCode
     */
    private $promoAliasCode = null;

    /**
     * Gets as promoCode
     *
     * @return string
     */
    public function getPromoCode()
    {
        return $this->promoCode;
    }

    /**
     * Sets a new promoCode
     *
     * @param string $promoCode
     * @return self
     */
    public function setPromoCode($promoCode)
    {
        $this->promoCode = $promoCode;
        return $this;
    }

    /**
     * Gets as promoAliasCode
     *
     * @return string
     */
    public function getPromoAliasCode()
    {
        return $this->promoAliasCode;
    }

    /**
     * Sets a new promoAliasCode
     *
     * @param string $promoAliasCode
     * @return self
     */
    public function setPromoAliasCode($promoAliasCode)
    {
        $this->promoAliasCode = $promoAliasCode;
        return $this;
    }


}

