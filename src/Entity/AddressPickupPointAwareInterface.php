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

namespace MonsieurBiz\SyliusAdvancedShippingPlugin\Entity;

interface AddressPickupPointAwareInterface
{
    public function getPickupPointType(): ?string;

    public function setPickupPointType(?string $pickupPointType): void;

    public function getPickupPointCode(): ?string;

    public function setPickupPointCode(?string $pickupPointCode): void;
}
