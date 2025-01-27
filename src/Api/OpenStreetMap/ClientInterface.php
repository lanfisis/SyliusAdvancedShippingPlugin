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

namespace MonsieurBiz\SyliusAdvancedShippingPlugin\Api\OpenStreetMap;

use MonsieurBiz\SyliusAdvancedShippingPlugin\Api\AddressAutocompleteClientInterface;

interface ClientInterface extends AddressAutocompleteClientInterface
{
    public const NOMINATIM_API_URL = 'https://nominatim.openstreetmap.org';

    public static function create(): self;
}
