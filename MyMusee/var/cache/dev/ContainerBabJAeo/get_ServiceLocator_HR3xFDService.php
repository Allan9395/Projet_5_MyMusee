<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.h_R3xFD' shared service.

return $this->privates['.service_locator.h_R3xFD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'repo' => ['privates', 'App\\Repository\\MuseumsRepository', 'getMuseumsRepositoryService.php', true],
], [
    'repo' => 'App\\Repository\\MuseumsRepository',
]);
