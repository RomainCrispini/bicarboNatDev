<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTRSBpMU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTRSBpMU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTRSBpMU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTRSBpMU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTRSBpMU\App_KernelDevDebugContainer([
    'container.build_hash' => 'TRSBpMU',
    'container.build_id' => '9ad60fa4',
    'container.build_time' => 1703776484,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTRSBpMU');
