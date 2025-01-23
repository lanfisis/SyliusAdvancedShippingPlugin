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
use MonsieurBiz\SyliusAdvancedShippingPlugin\Provider\MapProvider\MapProviderInterface;

interface MapProviderFactoryInterface
{
    public function createFromConfiguration(MapProviderConfigurationInterface $configuration): MapProviderInterface;
}
