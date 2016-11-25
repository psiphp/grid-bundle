<?php

namespace Psi\Bundle\Grid\DependencyInjection\Compiler;

class CellPass extends AbstractRegistryPass
{
    public function __construct()
    {
        parent::__construct(
            'psi_grid.column_registry',
            'psi_grid.column'
        );
    }
}
