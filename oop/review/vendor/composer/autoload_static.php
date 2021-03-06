<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb915c7f48c94463147227a76e1514e2
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Acme\\AuthController' => __DIR__ . '/../..' . '/src/AuthController.php',
        'Acme\\RegisterUser' => __DIR__ . '/../..' . '/src/RegisterUser.php',
        'Acme\\RespondsToUserRegistration' => __DIR__ . '/../..' . '/src/RespondsToUserRegistration.php',
        'ComposerAutoloaderInitdb915c7f48c94463147227a76e1514e2' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitdb915c7f48c94463147227a76e1514e2' => __DIR__ . '/..' . '/composer/autoload_static.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb915c7f48c94463147227a76e1514e2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb915c7f48c94463147227a76e1514e2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdb915c7f48c94463147227a76e1514e2::$classMap;

        }, null, ClassLoader::class);
    }
}
