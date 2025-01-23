<?php

/*
 * This file is part of Monsieur Biz' Advanced Shipping plugin for Sylius.
 *
 * (c) Monsieur Biz <sylius@monsieurbiz.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace MonsieurBiz\SyliusAdvancedShippingPlugin\Api\ChronopostPickup\Config;

interface ChronopostPickupConfigInterface
{
    public function getPickupApiUrl(): string;

    public function setPickupApiUrl(string $pickupApiUrl): void;

    public function getPickupApiAccountNumber(): string;

    public function setPickupApiAccountNumber(string $pickupApiAccountNumber): void;

    public function getPickupApiPassword(): string;

    public function setPickupApiPassword(string $pickupApiPassword): void;
}
