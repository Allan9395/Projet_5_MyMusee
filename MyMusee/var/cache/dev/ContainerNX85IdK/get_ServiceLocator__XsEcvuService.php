<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator..xsEcvu' shared service.

return $this->privates['.service_locator..xsEcvu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'museum' => ['privates', '.errored..service_locator..xsEcvu.App\\Entity\\Museums', NULL, 'Cannot autowire service ".service_locator..xsEcvu": it references class "App\\Entity\\Museums" but no such service exists.'],
], [
    'museum' => 'App\\Entity\\Museums',
]);
