<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Flux\VerifactuBundle\Handler\TestHandler;

return static function (ContainerConfigurator $container): void {
    $services = $container->services();

    // test handler
    $services->set('flux_verifactu.test_handler', TestHandler::class)
        ->public();

    $services->alias(TestHandler::class, 'flux_verifactu.test_handler');
};
