<?php

namespace Symfony\Component\Routing\Loader\Configurator;

return function(RoutingConfigurator $configurator) {
    $configurator->import('../src/Controller/', 'annotation');
};
