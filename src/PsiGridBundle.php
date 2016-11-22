<?php

namespace Psi\Bundle\Grid;

use Psi\Bundle\Grid\DependencyInjection\Compiler\ActionPass;
use Psi\Bundle\Grid\DependencyInjection\Compiler\CellPass;
use Psi\Bundle\Grid\DependencyInjection\Compiler\FilterPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class PsiGridBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new CellPass());
        $container->addCompilerPass(new FilterPass());
        $container->addCompilerPass(new ActionPass());
    }
}
