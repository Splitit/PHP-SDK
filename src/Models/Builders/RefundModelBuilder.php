<?php

declare(strict_types=1);

/*
 * SplititWebApiV3Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SplititWebApiV3Lib\Models\Builders;

use Core\Utils\CoreHelper;
use SplititWebApiV3Lib\Models\RefundModel;

/**
 * Builder for model RefundModel
 *
 * @see RefundModel
 */
class RefundModelBuilder
{
    /**
     * @var RefundModel
     */
    private $instance;

    private function __construct(RefundModel $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Refund Model Builder object.
     *
     * @param \DateTime $submitDate
     * @param float $totalAmount
     * @param string $status
     * @param float $nonCreditRefundAmount
     * @param float $creditRefundAmount
     */
    public static function init(
        \DateTime $submitDate,
        float $totalAmount,
        string $status,
        float $nonCreditRefundAmount,
        float $creditRefundAmount
    ): self {
        return new self(
            new RefundModel($submitDate, $totalAmount, $status, $nonCreditRefundAmount, $creditRefundAmount)
        );
    }

    /**
     * Sets Refund Id field.
     *
     * @param string|null $value
     */
    public function refundId(?string $value): self
    {
        $this->instance->setRefundId($value);
        return $this;
    }

    /**
     * Sets Reference Id field.
     *
     * @param string|null $value
     */
    public function referenceId(?string $value): self
    {
        $this->instance->setReferenceId($value);
        return $this;
    }

    /**
     * Initializes a new Refund Model object.
     */
    public function build(): RefundModel
    {
        return CoreHelper::clone($this->instance);
    }
}
