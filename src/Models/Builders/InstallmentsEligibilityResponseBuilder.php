<?php

declare(strict_types=1);

/*
 * SplititWebApiV3Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SplititWebApiV3Lib\Models\Builders;

use Core\Utils\CoreHelper;
use SplititWebApiV3Lib\Models\InstallmentsEligibilityResponse;
use SplititWebApiV3Lib\Models\PaymentPlanOptionModel;

/**
 * Builder for model InstallmentsEligibilityResponse
 *
 * @see InstallmentsEligibilityResponse
 */
class InstallmentsEligibilityResponseBuilder
{
    /**
     * @var InstallmentsEligibilityResponse
     */
    private $instance;

    private function __construct(InstallmentsEligibilityResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Installments Eligibility Response Builder object.
     */
    public static function init(): self
    {
        return new self(new InstallmentsEligibilityResponse());
    }

    /**
     * Sets Installment Provider field.
     *
     * @param string|null $value
     */
    public function installmentProvider(?string $value): self
    {
        $this->instance->setInstallmentProvider($value);
        return $this;
    }

    /**
     * Sets Payment Plan Options field.
     *
     * @param PaymentPlanOptionModel[]|null $value
     */
    public function paymentPlanOptions(?array $value): self
    {
        $this->instance->setPaymentPlanOptions($value);
        return $this;
    }

    /**
     * Initializes a new Installments Eligibility Response object.
     */
    public function build(): InstallmentsEligibilityResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
