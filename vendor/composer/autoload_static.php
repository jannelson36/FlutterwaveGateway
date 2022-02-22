<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb3b097a2865b630cdc6ce2c2f7c2f7a
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'F' => 
        array (
            'Flutterwave\\' => 12,
            'FlutterwavePay\\' => 15,
            'FlutterwaveApi\\' => 15,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Flutterwave\\' => 
        array (
            0 => __DIR__ . '/..' . '/flutterwavedev/flutterwave-v3/library/Rave',
            1 => __DIR__ . '/..' . '/seunex17/flutterwave-php-payment-gateway/src',
        ),
        'FlutterwavePay\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'FlutterwaveApi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Api',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Unirest\\' => 
            array (
                0 => __DIR__ . '/..' . '/mashape/unirest-php/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb3b097a2865b630cdc6ce2c2f7c2f7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb3b097a2865b630cdc6ce2c2f7c2f7a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfb3b097a2865b630cdc6ce2c2f7c2f7a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitfb3b097a2865b630cdc6ce2c2f7c2f7a::$classMap;

        }, null, ClassLoader::class);
    }
}