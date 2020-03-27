<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcbd038d0e6fda9665671ad46ec9594a2
{
    public static $files = array (
        'c4ed057a6919e316c176e816418cc6a3' => __DIR__ . '/..' . '/reactr-io/pope-framework/lib/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpParser\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcbd038d0e6fda9665671ad46ec9594a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcbd038d0e6fda9665671ad46ec9594a2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
