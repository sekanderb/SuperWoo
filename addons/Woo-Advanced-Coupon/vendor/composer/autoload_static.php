<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf96d97d3289cad25c2c755344486969
{
    public static $files = array (
        '0b0b96c757bc21b05a4512b1374dfcb8' => __DIR__ . '/../..' . '/includes/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'superwoo_coupon\\superwoo_coupon_Coupon\\' => 39,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'superwoo_coupon\\superwoo_coupon_Coupon\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf96d97d3289cad25c2c755344486969::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf96d97d3289cad25c2c755344486969::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
