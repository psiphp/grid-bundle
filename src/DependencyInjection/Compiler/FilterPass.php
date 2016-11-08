<?php

namespace Psi\Bundle\Grid\DependencyInjection\Compiler;

class FilterPass extends AbstractRegistryPass
{
    public function __construct()
    {
        parent::__construct(
            'psi_grid.filter_registry',
            'psi_grid.filter'
        );
    }
}
