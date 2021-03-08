<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit434f475bb7d4c64f4bc989cdbe040682
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit434f475bb7d4c64f4bc989cdbe040682::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit434f475bb7d4c64f4bc989cdbe040682::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
