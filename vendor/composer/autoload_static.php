<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4eae9ab0e4e868f2921dcfc19b84cb44
{
    public static $prefixLengthsPsr4 = array (
        'd' =>
        array (
            'design_pattern\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'design_pattern\\' =>
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4eae9ab0e4e868f2921dcfc19b84cb44::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4eae9ab0e4e868f2921dcfc19b84cb44::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
