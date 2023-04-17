<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit228642c730f5a4964f84f06c90c7fc53
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit228642c730f5a4964f84f06c90c7fc53::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit228642c730f5a4964f84f06c90c7fc53::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit228642c730f5a4964f84f06c90c7fc53::$classMap;

        }, null, ClassLoader::class);
    }
}