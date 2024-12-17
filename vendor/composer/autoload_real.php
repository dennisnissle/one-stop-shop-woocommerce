<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdd307bebf4c2ab23c0f049ef7b47638c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitdd307bebf4c2ab23c0f049ef7b47638c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdd307bebf4c2ab23c0f049ef7b47638c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdd307bebf4c2ab23c0f049ef7b47638c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
