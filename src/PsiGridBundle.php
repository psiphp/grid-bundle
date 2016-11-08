<?php

namespace Psi\Bundle\Grid;

use Psi\Bundle\Grid\DependencyInjection\Compiler\FilterPass;
use Psi\Bundle\Grid\DependencyInjection\Compiler\ViewPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class PsiGridBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new ViewPass());
        $container->addCompilerPass(new FilterPass());
    }
}
