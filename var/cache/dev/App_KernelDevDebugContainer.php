<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerH5QApIQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerH5QApIQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerH5QApIQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerH5QApIQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerH5QApIQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'H5QApIQ',
    'container.build_id' => '031b197e',
    'container.build_time' => 1623501109,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerH5QApIQ');
