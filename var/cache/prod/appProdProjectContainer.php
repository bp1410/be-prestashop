<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGijrlwt\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGijrlwt/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerGijrlwt.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerGijrlwt\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerGijrlwt\appProdProjectContainer([
    'container.build_hash' => 'Gijrlwt',
    'container.build_id' => '0929f4ab',
    'container.build_time' => 1670934128,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGijrlwt');