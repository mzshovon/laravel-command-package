<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit721782def207639f4e034ba974cd7c8f
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mzshovon\\EasyRepo\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mzshovon\\EasyRepo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit721782def207639f4e034ba974cd7c8f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit721782def207639f4e034ba974cd7c8f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit721782def207639f4e034ba974cd7c8f::$classMap;

        }, null, ClassLoader::class);
    }
}
