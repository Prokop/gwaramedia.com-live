<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc39eaceb57d60355273d1481f6e956d
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FSPoster\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FSPoster\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc39eaceb57d60355273d1481f6e956d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc39eaceb57d60355273d1481f6e956d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdc39eaceb57d60355273d1481f6e956d::$classMap;

        }, null, ClassLoader::class);
    }
}
