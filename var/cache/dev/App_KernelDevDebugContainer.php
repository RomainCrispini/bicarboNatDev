<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDAcWzGc\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDAcWzGc/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDAcWzGc.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDAcWzGc\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDAcWzGc\App_KernelDevDebugContainer([
    'container.build_hash' => 'DAcWzGc',
    'container.build_id' => 'c52ca296',
    'container.build_time' => 1703545580,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDAcWzGc');
