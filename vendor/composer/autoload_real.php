<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc4802e05bbcf59fd3b6350e8d3e5482c_protectⓥ1_0_4_alpha
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

        spl_autoload_register(array('ComposerAutoloaderInitc4802e05bbcf59fd3b6350e8d3e5482c_protectⓥ1_0_4_alpha', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc4802e05bbcf59fd3b6350e8d3e5482c_protectⓥ1_0_4_alpha', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc4802e05bbcf59fd3b6350e8d3e5482c_protectⓥ1_0_4_alpha::getInitializer($loader));

        $loader->setClassMapAuthoritative(true);
        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitc4802e05bbcf59fd3b6350e8d3e5482c_protectⓥ1_0_4_alpha::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequirec4802e05bbcf59fd3b6350e8d3e5482c_protectⓥ1_0_4_alpha($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequirec4802e05bbcf59fd3b6350e8d3e5482c_protectⓥ1_0_4_alpha($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
