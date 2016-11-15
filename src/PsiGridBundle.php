<?php

namespace Psi\Bundle\Grid;

use Psi\Bundle\Grid\DependencyInjection\Compiler\FilterPass;
use Psi\Bundle\Grid\DependencyInjection\Compiler\CellPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Psi\Bundle\Grid\DependencyInjection\Compiler\ActionPass;

class PsiGridBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new CellPass());
        $container->addCompilerPass(new FilterPass());
        $container->addCompilerPass(new ActionPass());
    }
}
