<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc07faba02ba3a37196f6283ebb3ef1f5
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SharedNamespace\\' => 16,
            'SecondNamespace\\' => 16,
        ),
        'F' => 
        array (
            'FirstNamespace\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SharedNamespace\\' => 
        array (
            0 => __DIR__ . '/..' . '/shared',
        ),
        'SecondNamespace\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'FirstNamespace\\' => 
        array (
            0 => __DIR__ . '/..' . '/dir11/dir11/src',
        ),
    );

    public static $classMap = array (
        'FirstNamespace\\First' => __DIR__ . '/..' . '/dir11/dir11/src/First.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc07faba02ba3a37196f6283ebb3ef1f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc07faba02ba3a37196f6283ebb3ef1f5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc07faba02ba3a37196f6283ebb3ef1f5::$classMap;

        }, null, ClassLoader::class);
    }
}
