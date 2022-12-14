<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc0aaec367031db5e1a78889ada55c37
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PrestaShop\\Module\\BlockReassurance\\' => 35,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PrestaShop\\Module\\BlockReassurance\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'ReassuranceActivity' => __DIR__ . '/../..' . '/classes/ReassuranceActivity.php',
        'blockreassurance' => __DIR__ . '/../..' . '/blockreassurance.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcc0aaec367031db5e1a78889ada55c37::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcc0aaec367031db5e1a78889ada55c37::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcc0aaec367031db5e1a78889ada55c37::$classMap;

        }, null, ClassLoader::class);
    }
}
