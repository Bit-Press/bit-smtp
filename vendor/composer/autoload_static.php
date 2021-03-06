<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c89c9c0ddb43211e74b5a96453ef936
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BitPress\\BIT_SMTP\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BitPress\\BIT_SMTP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3c89c9c0ddb43211e74b5a96453ef936::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3c89c9c0ddb43211e74b5a96453ef936::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
