<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb2e77aac2fc5a43fb46b05bc752c3980
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Exemplo\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Exemplo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Exemplo',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb2e77aac2fc5a43fb46b05bc752c3980::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb2e77aac2fc5a43fb46b05bc752c3980::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb2e77aac2fc5a43fb46b05bc752c3980::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
