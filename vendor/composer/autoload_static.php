<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e22a24c1d4e150152ab30368612ca00
{
    public static $files = array (
        '0ef47a4b72525e193394feab8d67de79' => __DIR__ . '/../..' . '/src/Support/Helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ioMode\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ioMode\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e22a24c1d4e150152ab30368612ca00::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e22a24c1d4e150152ab30368612ca00::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
