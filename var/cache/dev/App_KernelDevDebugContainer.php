<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJ4qMLuY\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJ4qMLuY/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJ4qMLuY.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJ4qMLuY\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJ4qMLuY\App_KernelDevDebugContainer([
    'container.build_hash' => 'J4qMLuY',
    'container.build_id' => '1e35e97d',
    'container.build_time' => 1709679079,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJ4qMLuY');
