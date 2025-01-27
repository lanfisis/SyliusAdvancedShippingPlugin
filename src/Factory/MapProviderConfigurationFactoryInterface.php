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

namespace MonsieurBiz\SyliusAdvancedShippingPlugin\Factory;

use MonsieurBiz\SyliusAdvancedShippingPlugin\Entity\MapProviderConfigurationInterface;
use Sylius\Component\Resource\Factory\FactoryInterface;

interface MapProviderConfigurationFactoryInterface extends FactoryInterface
{
    public function createWithProviderName(string $providerName): MapProviderConfigurationInterface;
}
