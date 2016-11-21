<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd79f797dc49be68143fde72dba5af893
{
    public static $files = array (
        'aca594cec0c196659a3b7d4dc2665c0b' => __DIR__ . '/..' . '/j7mbo/twitter-api-php/TwitterAPIExchange.php',
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MetzWeb\\Instagram\\' => 18,
        ),
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MetzWeb\\Instagram\\' => 
        array (
            0 => __DIR__ . '/..' . '/cosenary/instagram/src',
        ),
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd79f797dc49be68143fde72dba5af893::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd79f797dc49be68143fde72dba5af893::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
