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

namespace App\Entity\Shipping;

use Doctrine\ORM\Mapping as ORM;
use MonsieurBiz\SyliusAdvancedShippingPlugin\Entity\AdvancedShipmentMetadataAwareTrait;
use Sylius\Component\Core\Model\Shipment as BaseShipment;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_shipment")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_shipment')]
class Shipment extends BaseShipment implements ShipmentInterface
{
    use AdvancedShipmentMetadataAwareTrait;
}
