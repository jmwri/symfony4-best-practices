<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\CustomDb;

return function(ContainerConfigurator $configurator) {
    $configurator->parameters()
        ->set('db_host', '%env(DB_HOST)%')
        ->set('db_port', '%env(DB_PORT)%');

    $configurator->services()->defaults()
        ->autowire()
        ->autoconfigure()
        ->private();

    $configurator->services()->load('App\\', '../src/*')
        ->exclude('../src/{Entity,Migrations,Repository,Tests}');

    $configurator->services()->load('App\Controller\\', '../src/Controller')
        ->tag('controller.service_arguments')
        ->public();

    $configurator->services()->set(CustomDb::class)
        ->arg('$host', '%db_host%')
        ->arg('$port', '%db_port%');
};
