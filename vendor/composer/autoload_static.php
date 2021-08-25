<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite62c5fabfef8e82a6cfdd6269c9c5cda
{
    public static $files = array (
        '63c499f23e44e01ed6804f2ff4f4569a' => __DIR__ . '/../..' . '/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tests\\' => 6,
        ),
        'O' => 
        array (
            'OnlyShow\\WalletApiSdk\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'OnlyShow\\WalletApiSdk\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite62c5fabfef8e82a6cfdd6269c9c5cda::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite62c5fabfef8e82a6cfdd6269c9c5cda::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite62c5fabfef8e82a6cfdd6269c9c5cda::$classMap;

        }, null, ClassLoader::class);
    }
}
