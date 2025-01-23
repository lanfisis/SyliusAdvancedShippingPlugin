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

namespace MonsieurBiz\SyliusAdvancedShippingPlugin\Model;

use DateTime;

interface HolidayTimeSlotInterface
{
    public function setStartTime(DateTime $time): void;

    public function getStartTime(): ?DateTime;

    public function setEndTime(DateTime $time): void;

    public function getEndTime(): ?DateTime;
}
