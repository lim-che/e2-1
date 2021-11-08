<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit642d048939f0e8c09bcca8308287cac4
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RPS\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RPS\\' => 
        array (
            0 => __DIR__ . '/..' . '/susanbuck/rock-paper-scissors/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit642d048939f0e8c09bcca8308287cac4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit642d048939f0e8c09bcca8308287cac4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit642d048939f0e8c09bcca8308287cac4::$classMap;

        }, null, ClassLoader::class);
    }
}