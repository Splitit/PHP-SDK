<?php

declare(strict_types=1);

/*
 * SplititWebApiV3Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SplititWebApiV3Lib\Models;

use SplititWebApiV3Lib\ApiHelper;
use stdClass;

class CheckInstallmentsEligibilityRequest implements \JsonSerializable
{
    /**
     * @var PlanData|null
     */
    private $planData;

    /**
     * @var CardData|null
     */
    private $cardDetails;

    /**
     * @var AddressData|null
     */
    private $billingAddress;

    /**
     * @var string|null
     */
    private $shopperIdentifier;

    /**
     * Returns Plan Data.
     */
    public function getPlanData(): ?PlanData
    {
        return $this->planData;
    }

    /**
     * Sets Plan Data.
     *
     * @maps PlanData
     */
    public function setPlanData(?PlanData $planData): void
    {
        $this->planData = $planData;
    }

    /**
     * Returns Card Details.
     */
    public function getCardDetails(): ?CardData
    {
        return $this->cardDetails;
    }

    /**
     * Sets Card Details.
     *
     * @maps CardDetails
     */
    public function setCardDetails(?CardData $cardDetails): void
    {
        $this->cardDetails = $cardDetails;
    }

    /**
     * Returns Billing Address.
     */
    public function getBillingAddress(): ?AddressData
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     *
     * @maps BillingAddress
     */
    public function setBillingAddress(?AddressData $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Shopper Identifier.
     */
    public function getShopperIdentifier(): ?string
    {
        return $this->shopperIdentifier;
    }

    /**
     * Sets Shopper Identifier.
     *
     * @maps ShopperIdentifier
     */
    public function setShopperIdentifier(?string $shopperIdentifier): void
    {
        $this->shopperIdentifier = $shopperIdentifier;
    }

    /**
     * Converts the CheckInstallmentsEligibilityRequest object to a human-readable string representation.
     *
     * @return string The string representation of the CheckInstallmentsEligibilityRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckInstallmentsEligibilityRequest',
            [
                'planData' => $this->planData,
                'cardDetails' => $this->cardDetails,
                'billingAddress' => $this->billingAddress,
                'shopperIdentifier' => $this->shopperIdentifier
            ]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->planData)) {
            $json['PlanData']          = $this->planData;
        }
        if (isset($this->cardDetails)) {
            $json['CardDetails']       = $this->cardDetails;
        }
        if (isset($this->billingAddress)) {
            $json['BillingAddress']    = $this->billingAddress;
        }
        if (isset($this->shopperIdentifier)) {
            $json['ShopperIdentifier'] = $this->shopperIdentifier;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
