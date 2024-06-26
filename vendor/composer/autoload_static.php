<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit243276b01d47247867e19ec81ff28e2a
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NndPhpTest\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NndPhpTest\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit243276b01d47247867e19ec81ff28e2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit243276b01d47247867e19ec81ff28e2a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit243276b01d47247867e19ec81ff28e2a::$classMap;

        }, null, ClassLoader::class);
    }
}
