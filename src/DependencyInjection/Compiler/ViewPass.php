<?php

namespace Psi\Bundle\Grid\DependencyInjection\Compiler;

class ViewPass extends AbstractRegistryPass
{
    public function __construct()
    {
        parent::__construct(
            'psi_grid.view_registry',
            'psi_grid.view'
        );
    }
}
