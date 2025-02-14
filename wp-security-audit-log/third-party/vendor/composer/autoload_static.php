<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48bec6ff03bb7891866fb0474fb5616a
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WSAL_Vendor\\WP_Async_Request' => __DIR__ . '/..' . '/classes/wp-async-request.php',
        'WSAL_Vendor\\WP_Background_Process' => __DIR__ . '/..' . '/classes/wp-background-process.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit48bec6ff03bb7891866fb0474fb5616a::$classMap;

        }, null, ClassLoader::class);
    }
}
