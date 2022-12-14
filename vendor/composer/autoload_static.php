<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf7b48587c4773ab79cc5ebea7991a464
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf7b48587c4773ab79cc5ebea7991a464::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf7b48587c4773ab79cc5ebea7991a464::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf7b48587c4773ab79cc5ebea7991a464::$classMap;

        }, null, ClassLoader::class);
    }
}
