<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPtzzpqy\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPtzzpqy/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerPtzzpqy.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerPtzzpqy\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerPtzzpqy\appProdProjectContainer(array(
    'container.build_hash' => 'Ptzzpqy',
    'container.build_id' => '9c969e29',
    'container.build_time' => 1634421092,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerPtzzpqy');
