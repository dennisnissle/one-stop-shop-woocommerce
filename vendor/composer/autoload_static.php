<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit360b5050ae7de6b12b717b1d5a6fc16c
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vendidero\\OneStopShop\\' => 22,
        ),
        'A' => 
        array (
            'Automattic\\Jetpack\\Autoloader\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vendidero\\OneStopShop\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Automattic\\Jetpack\\Autoloader\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src',
        ),
    );

    public static $classMap = array (
        'Automattic\\Jetpack\\Autoloader\\AutoloadFileWriter' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadFileWriter.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadGenerator.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadProcessor' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadProcessor.php',
        'Automattic\\Jetpack\\Autoloader\\CustomAutoloaderPlugin' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/CustomAutoloaderPlugin.php',
        'Automattic\\Jetpack\\Autoloader\\ManifestGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/ManifestGenerator.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Vendidero\\OneStopShop\\Admin' => __DIR__ . '/../..' . '/src/Admin.php',
        'Vendidero\\OneStopShop\\AdminNote' => __DIR__ . '/../..' . '/src/AdminNote.php',
        'Vendidero\\OneStopShop\\AsyncReportGenerator' => __DIR__ . '/../..' . '/src/AsyncReportGenerator.php',
        'Vendidero\\OneStopShop\\CSVExporter' => __DIR__ . '/../..' . '/src/CSVExporter.php',
        'Vendidero\\OneStopShop\\DeliveryThresholdEmailNotification' => __DIR__ . '/../..' . '/src/DeliveryThresholdEmailNotification.php',
        'Vendidero\\OneStopShop\\DeliveryThresholdWarning' => __DIR__ . '/../..' . '/src/DeliveryThresholdWarning.php',
        'Vendidero\\OneStopShop\\Install' => __DIR__ . '/../..' . '/src/Install.php',
        'Vendidero\\OneStopShop\\Package' => __DIR__ . '/../..' . '/src/Package.php',
        'Vendidero\\OneStopShop\\Queue' => __DIR__ . '/../..' . '/src/Queue.php',
        'Vendidero\\OneStopShop\\Report' => __DIR__ . '/../..' . '/src/Report.php',
        'Vendidero\\OneStopShop\\ReportTable' => __DIR__ . '/../..' . '/src/ReportTable.php',
        'Vendidero\\OneStopShop\\Settings' => __DIR__ . '/../..' . '/src/Settings.php',
        'Vendidero\\OneStopShop\\SettingsPage' => __DIR__ . '/../..' . '/src/SettingsPage.php',
        'Vendidero\\OneStopShop\\Tax' => __DIR__ . '/../..' . '/src/Tax.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit360b5050ae7de6b12b717b1d5a6fc16c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit360b5050ae7de6b12b717b1d5a6fc16c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit360b5050ae7de6b12b717b1d5a6fc16c::$classMap;

        }, null, ClassLoader::class);
    }
}
