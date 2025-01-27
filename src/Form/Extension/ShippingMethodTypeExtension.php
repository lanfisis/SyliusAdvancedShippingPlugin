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

namespace MonsieurBiz\SyliusAdvancedShippingPlugin\Form\Extension;

use MonsieurBiz\SyliusAdvancedShippingPlugin\Entity\ShippingAddressProviderConfigurationInterface;
use MonsieurBiz\SyliusAdvancedShippingPlugin\Entity\ShippingTypeInterface;
use Sylius\Bundle\ShippingBundle\Form\Type\ShippingMethodType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

final class ShippingMethodTypeExtension extends AbstractTypeExtension
{
    public function __construct(
        #[Autowire(param: 'monsieurbiz_advanced_shipping.model.shipping_address_provider_configuration.class')]
        private string $shippingAddressProviderConfigurationClass,
        #[Autowire(param: 'monsieurbiz_advanced_shipping.model.shipping_type.class')]
        private string $shippingTypeClass,
    ) {
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('shippingAddressProviderConfiguration', EntityType::class, [
                'required' => false,
                'class' => $this->shippingAddressProviderConfigurationClass,
                'choice_label' => function (ShippingAddressProviderConfigurationInterface $configuration): string {
                    return \sprintf('%s - %s', $configuration->getCode(), $configuration->getName());
                },
                'group_by' => 'provider',
                'label' => 'monsieurbiz_advanced_shipping.form.shipping_address_provider',
            ])
            ->add('type', EntityType::class, [
                'label' => 'monsieurbiz_advanced_shipping.ui.shipping_type',
                'required' => true,
                'class' => $this->shippingTypeClass,
                'choice_label' => function (ShippingTypeInterface $shippingType): string {
                    return (string) $shippingType->getLabel();
                },
            ])
        ;
    }

    public static function getExtendedTypes(): iterable
    {
        return [ShippingMethodType::class];
    }
}
