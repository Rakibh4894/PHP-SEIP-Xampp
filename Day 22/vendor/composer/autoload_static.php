<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78f59a17545115a508c3436bb4240832
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit78f59a17545115a508c3436bb4240832::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78f59a17545115a508c3436bb4240832::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
