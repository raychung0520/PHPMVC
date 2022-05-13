<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit395c4e6d6974a915e705203a046a2db2
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit395c4e6d6974a915e705203a046a2db2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit395c4e6d6974a915e705203a046a2db2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit395c4e6d6974a915e705203a046a2db2::$classMap;

        }, null, ClassLoader::class);
    }
}
