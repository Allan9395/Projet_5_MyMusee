<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'twig.controller.preview_error' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/Controller/PreviewErrorController.php';

return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), 'App\\Controller\\ExceptionController::showException');
