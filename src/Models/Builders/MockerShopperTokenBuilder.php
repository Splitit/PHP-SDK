<?php

declare(strict_types=1);

/*
 * SplititWebApiV3Lib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SplititWebApiV3Lib\Models\Builders;

use Core\Utils\CoreHelper;
use SplititWebApiV3Lib\Models\MockerShopperToken;

/**
 * Builder for model MockerShopperToken
 *
 * @see MockerShopperToken
 */
class MockerShopperTokenBuilder
{
    /**
     * @var MockerShopperToken
     */
    private $instance;

    private function __construct(MockerShopperToken $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Mocker Shopper Token Builder object.
     */
    public static function init(): self
    {
        return new self(new MockerShopperToken());
    }

    /**
     * Sets Token field.
     *
     * @param string|null $value
     */
    public function token(?string $value): self
    {
        $this->instance->setToken($value);
        return $this;
    }

    /**
     * Sets Last 4 Digit field.
     *
     * @param string|null $value
     */
    public function last4Digit(?string $value): self
    {
        $this->instance->setLast4Digit($value);
        return $this;
    }

    /**
     * Initializes a new Mocker Shopper Token object.
     */
    public function build(): MockerShopperToken
    {
        return CoreHelper::clone($this->instance);
    }
}
