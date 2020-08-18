<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8eb13ae930a05be9f0ebad6b6247126a
{
    public static $files = array (
        'a916fe695c4a2934c439911fed78df56' => __DIR__ . '/../..' . '/includes/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WpAdroit\\SuperWoo\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WpAdroit\\SuperWoo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8eb13ae930a05be9f0ebad6b6247126a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8eb13ae930a05be9f0ebad6b6247126a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}