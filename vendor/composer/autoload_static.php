<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit976112574bbc476c0871b7e1d1f8f87d
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '9b38cf48e83f5d8f60375221cd213eee' => __DIR__ . '/..' . '/phpstan/phpstan/bootstrap.php',
        '92c8763cd6170fce6fcfe7e26b4e8c10' => __DIR__ . '/..' . '/symfony/phpunit-bridge/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Bridge\\PhpUnit\\' => 23,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'C' => 
        array (
            'Composer\\CaBundle\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Bridge\\PhpUnit\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/phpunit-bridge',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/../..' . '/tests',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit976112574bbc476c0871b7e1d1f8f87d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit976112574bbc476c0871b7e1d1f8f87d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit976112574bbc476c0871b7e1d1f8f87d::$classMap;

        }, null, ClassLoader::class);
    }
}
