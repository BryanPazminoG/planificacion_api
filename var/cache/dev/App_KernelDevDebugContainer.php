<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerE8tgqHy\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerE8tgqHy/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerE8tgqHy.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerE8tgqHy\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerE8tgqHy\App_KernelDevDebugContainer([
    'container.build_hash' => 'E8tgqHy',
    'container.build_id' => '2467bae7',
    'container.build_time' => 1706411387,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerE8tgqHy');