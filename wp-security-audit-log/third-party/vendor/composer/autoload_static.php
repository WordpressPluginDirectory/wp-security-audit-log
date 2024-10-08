<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1a9ace99a3b418bf006499a4b5da163
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WSAL_Vendor\\WP_Async_Request' => __DIR__ . '/..' . '/classes/wp-async-request.php',
        'WSAL_Vendor\\WP_Background_Process' => __DIR__ . '/..' . '/classes/wp-background-process.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite1a9ace99a3b418bf006499a4b5da163::$classMap;

        }, null, ClassLoader::class);
    }
}
