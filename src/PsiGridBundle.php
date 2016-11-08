<?php

namespace Psi\Bundle\Grid;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Psi\Bundle\Grid\DependencyInjection\Compiler\FilterPass;
use Psi\Bundle\Grid\DependencyInjection\Compiler\ViewPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class PsiGridBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new ViewPass());
        $container->addCompilerPass(new FilterPass());
    }
}
