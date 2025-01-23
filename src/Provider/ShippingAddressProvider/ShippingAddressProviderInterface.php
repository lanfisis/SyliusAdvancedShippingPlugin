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

namespace MonsieurBiz\SyliusAdvancedShippingPlugin\Provider\ShippingAddressProvider;

use Sylius\Component\Core\Model\AddressInterface;

interface ShippingAddressProviderInterface
{
    public function getType(): string;

    public function setConfiguration(array $configuration): void;

    public function getShipmentMetadataFormType(): ?string;

    public function getShipmentMetadataTemplate(): ?string;

    public function getShippingAddressFromMetadata(?array $metadata): ?AddressInterface;

    public function getAddressListFromMetadata(array $metadata): array;

    public function isTemporaryAddress(): bool;
}
