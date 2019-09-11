<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ASezHR8' shared service.

return $this->privates['.service_locator.ASezHR8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService.php', true],
    'repo' => ['privates', 'App\\Repository\\MuseumsRepository', 'getMuseumsRepositoryService.php', true],
], [
    'paginator' => '?',
    'repo' => 'App\\Repository\\MuseumsRepository',
]);
