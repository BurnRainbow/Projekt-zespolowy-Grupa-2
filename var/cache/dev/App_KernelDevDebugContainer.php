<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXxWxlUp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXxWxlUp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXxWxlUp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXxWxlUp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXxWxlUp\App_KernelDevDebugContainer([
    'container.build_hash' => 'XxWxlUp',
    'container.build_id' => '8edb738a',
    'container.build_time' => 1681578001,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXxWxlUp');
