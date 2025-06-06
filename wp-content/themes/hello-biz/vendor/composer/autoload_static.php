<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbae087f1a843aa6f61839ff2a901e4ce
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Elementor\\WPNotificationsPackage\\' => 33,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Elementor\\WPNotificationsPackage\\' => 
        array (
            0 => __DIR__ . '/..' . '/elementor/wp-notifications-package/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbae087f1a843aa6f61839ff2a901e4ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbae087f1a843aa6f61839ff2a901e4ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbae087f1a843aa6f61839ff2a901e4ce::$classMap;

        }, null, ClassLoader::class);
    }
}
