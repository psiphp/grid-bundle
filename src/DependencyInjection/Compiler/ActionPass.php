<?php

namespace Psi\Bundle\Grid\DependencyInjection\Compiler;

class ActionPass extends AbstractRegistryPass
{
    public function __construct()
    {
        parent::__construct(
            'psi_grid.action_registry',
            'psi_grid.action'
        );
    }
}
