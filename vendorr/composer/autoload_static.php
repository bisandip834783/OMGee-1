<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb1add631052db19ec2dc5e0ea1e928c
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb1add631052db19ec2dc5e0ea1e928c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb1add631052db19ec2dc5e0ea1e928c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
