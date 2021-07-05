<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78fecb626b7af40a9b05acde1cd8af8e
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zoo\\' => 4,
        ),
        'B' => 
        array (
            'Belgium\\' => 8,
        ),
        'A' => 
        array (
            'Australia\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zoo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Belgium\\' => 
        array (
            0 => __DIR__ . '/../..' . '/belgai',
        ),
        'Australia\\' => 
        array (
            0 => __DIR__ . '/../..' . '/australai',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit78fecb626b7af40a9b05acde1cd8af8e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78fecb626b7af40a9b05acde1cd8af8e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit78fecb626b7af40a9b05acde1cd8af8e::$classMap;

        }, null, ClassLoader::class);
    }
}
