<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitebe9686116a9a416a1812301cc2ce59c
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitebe9686116a9a416a1812301cc2ce59c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitebe9686116a9a416a1812301cc2ce59c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitebe9686116a9a416a1812301cc2ce59c::$classMap;

        }, null, ClassLoader::class);
    }
}
