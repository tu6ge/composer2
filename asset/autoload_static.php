<?php

// autoload_static.php @generated by phpp

namespace Composer\Autoload;

class ComposerStaticInit2080362a582efbb88e9e73c21c34bc1f
{
    public static $files = array (
__FILES_CONTENT__    );

    public static $prefixLengthsPsr4 = array (
__PSR4_LENGTH__
    );

    public static $prefixDirsPsr4 = array (
__PSR4_DIRS__
    );

    public static $fallbackDirsPsr4 = array ();

    public static $prefixesPsr0 = array ();

    public static $classMap = array ();

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2080362a582efbb88e9e73c21c34bc1f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2080362a582efbb88e9e73c21c34bc1f::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit2080362a582efbb88e9e73c21c34bc1f::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit2080362a582efbb88e9e73c21c34bc1f::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit2080362a582efbb88e9e73c21c34bc1f::$classMap;

        }, null, ClassLoader::class);
    }
}
