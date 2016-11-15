<?php

namespace Psi\Bundle\Grid\Tests\Functional;

class ServiceTest extends BaseTestCase
{
    public function testServices()
    {
        $container = $this->getContainer();

        foreach ($container->getServiceIds() as $serviceId) {
            if (0 === strpos($serviceId, 'psi_grid')) {
                $service = $container->get($serviceId);

                // for the sake of incrementing the assertion count...
                $this->assertNotNull($service);
            }
        }
    }
}
