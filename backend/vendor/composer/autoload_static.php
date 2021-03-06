<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc893fd1f148f1189a080ce910aa89f2
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controller\\ClientController' => __DIR__ . '/../..' . '/app/Controller/ClientController.php',
        'App\\Controller\\TesterController' => __DIR__ . '/../..' . '/app/Controller/TesterController.php',
        'App\\Model\\ClientModel' => __DIR__ . '/../..' . '/app/Model/ClientModel.php',
        'App\\Model\\DatabaseModel' => __DIR__ . '/../..' . '/app/Model/DatabaseModel.php',
        'App\\router\\Request' => __DIR__ . '/../..' . '/app/router/Request.php',
        'App\\router\\Route' => __DIR__ . '/../..' . '/app/router/Route.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc893fd1f148f1189a080ce910aa89f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc893fd1f148f1189a080ce910aa89f2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdc893fd1f148f1189a080ce910aa89f2::$classMap;

        }, null, ClassLoader::class);
    }
}
