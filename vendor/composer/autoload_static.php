<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e90cd34971f0f6c8dc446e15019c258
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Ecuadlocation\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ecuadlocation\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e90cd34971f0f6c8dc446e15019c258::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e90cd34971f0f6c8dc446e15019c258::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}