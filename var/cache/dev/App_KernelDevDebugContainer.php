<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2v0oatN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2v0oatN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2v0oatN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2v0oatN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2v0oatN\App_KernelDevDebugContainer([
    'container.build_hash' => '2v0oatN',
    'container.build_id' => '23371c07',
    'container.build_time' => 1612344762,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2v0oatN');
