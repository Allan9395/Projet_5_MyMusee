<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDWrdlIh\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDWrdlIh/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDWrdlIh.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDWrdlIh\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerDWrdlIh\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'DWrdlIh',
    'container.build_id' => '9cad84e0',
    'container.build_time' => 1568416607,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDWrdlIh');
