<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit343481cc4bd8a379ad4afa5538ad91ab
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit343481cc4bd8a379ad4afa5538ad91ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit343481cc4bd8a379ad4afa5538ad91ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit343481cc4bd8a379ad4afa5538ad91ab::$classMap;

        }, null, ClassLoader::class);
    }
}
