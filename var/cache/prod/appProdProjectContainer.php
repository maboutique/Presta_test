<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2xxbent\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2xxbent/appProdProjectContainer.php') {
    touch(__DIR__.'/Container2xxbent.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container2xxbent\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container2xxbent\appProdProjectContainer([
    'container.build_hash' => '2xxbent',
    'container.build_id' => '8406b134',
    'container.build_time' => 1631083096,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2xxbent');