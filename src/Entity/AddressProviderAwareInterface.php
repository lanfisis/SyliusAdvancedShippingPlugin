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

interface AddressProviderAwareInterface
{
    public function getShippingAddressProviderConfiguration(): ?ShippingAddressProviderConfigurationInterface;

    public function setShippingAddressProviderConfiguration(?ShippingAddressProviderConfigurationInterface $shippingAddressProviderConfiguration): void;
}
