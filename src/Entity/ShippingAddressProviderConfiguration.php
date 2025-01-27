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

use DateTimeInterface;
use Sylius\Component\Resource\Model\TimestampableTrait;
use Sylius\Component\Resource\Model\TranslatableTrait;

/**
 * @method ShippingAddressProviderConfigurationTranslationInterface getTranslation(?string $locale = null)
 */
class ShippingAddressProviderConfiguration implements ShippingAddressProviderConfigurationInterface
{
    use TimestampableTrait;
    use TranslatableTrait {
        TranslatableTrait::__construct as protected initializeTranslationsCollection;
    }

    protected int $id;

    protected string $provider;

    protected string $code;

    protected array $configuration = [];

    /**
     * @var DateTimeInterface|null
     */
    protected $createdAt;

    /**
     * @var DateTimeInterface|null
     */
    protected $updatedAt;

    public function __construct()
    {
        $this->initializeTranslationsCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getProvider(): string
    {
        return $this->provider;
    }

    public function setProvider(?string $provider): void
    {
        $this->provider = (string) $provider;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(?string $code): void
    {
        $this->code = (string) $code;
    }

    public function getName(): string
    {
        return $this->getTranslation()->getName();
    }

    public function setName(?string $name): void
    {
        $this->getTranslation()->setName((string) $name);
    }

    public function getConfiguration(): array
    {
        return $this->configuration;
    }

    public function setConfiguration(array $configuration): void
    {
        $this->configuration = $configuration;
    }

    public function createTranslation(): ShippingAddressProviderConfigurationTranslationInterface
    {
        return new ShippingAddressProviderConfigurationTranslation();
    }
}
