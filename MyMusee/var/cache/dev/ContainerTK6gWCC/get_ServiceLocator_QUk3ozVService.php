<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.qUk3ozV' shared service.

return $this->privates['.service_locator.qUk3ozV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
    'museums' => ['privates', '.errored..service_locator.qUk3ozV.App\\Entity\\Museums', NULL, 'Cannot autowire service ".service_locator.qUk3ozV": it references class "App\\Entity\\Museums" but no such service exists.'],
], [
    'manager' => '?',
    'museums' => 'App\\Entity\\Museums',
]);
