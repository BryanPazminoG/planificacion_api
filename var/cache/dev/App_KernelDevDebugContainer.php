<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSccNkAC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSccNkAC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSccNkAC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSccNkAC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSccNkAC\App_KernelDevDebugContainer([
    'container.build_hash' => 'SccNkAC',
    'container.build_id' => '13ff47b9',
    'container.build_time' => 1706630304,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSccNkAC');
