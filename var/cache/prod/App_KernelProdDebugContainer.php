<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXJgCxRR\App_KernelProdDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXJgCxRR/App_KernelProdDebugContainer.php') {
    touch(__DIR__.'/ContainerXJgCxRR.legacy');

    return;
}

if (!\class_exists(App_KernelProdDebugContainer::class, false)) {
    \class_alias(\ContainerXJgCxRR\App_KernelProdDebugContainer::class, App_KernelProdDebugContainer::class, false);
}

return new \ContainerXJgCxRR\App_KernelProdDebugContainer([
    'container.build_hash' => 'XJgCxRR',
    'container.build_id' => '0baf56c8',
    'container.build_time' => 1695368820,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXJgCxRR');
