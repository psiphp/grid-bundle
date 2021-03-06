<?php

namespace Psi\Bundle\Grid\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class PsiGridExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('filter.xml');
        $loader->load('grid.xml');
        $loader->load('metadata.xml');
        $loader->load('cell.xml');
        $loader->load('action.xml');
        $loader->load('form.xml');
    }
}
