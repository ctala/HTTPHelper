<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita894ae8f13ce9c456acb62627795fe68
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'ctala\\HTTPHelper\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ctala\\HTTPHelper\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita894ae8f13ce9c456acb62627795fe68::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita894ae8f13ce9c456acb62627795fe68::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
