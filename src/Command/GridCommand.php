<?php

namespace Psi\Bundle\Grid\Command;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;

class GridCommand extends Command
{
    private $gridFactory;

    public function __construct(
        GridFactory $gridFactory
    )
    {
        $this->gridFactory = $gridFactory;
    }

    public function configure()
    {
        $this->setName('psi:grid');
        $this->addArgument('class', Argument::REQUIRED, 'Class to show grid for');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $grid = $this->gridFactory->loadGrid(
            $input->getArgument('class'),
            [
            ],
            [
            ]
        );

        var_dump($grid);die();;
    }
}
