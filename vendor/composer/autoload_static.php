<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f72f3bb7c6ee32c2a5028b2e2d64d68
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WooOnePay\\Traits\\' => 17,
            'WooOnePay\\Shortcodes\\' => 21,
            'WooOnePay\\Gateways\\' => 19,
            'WooOnePay\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WooOnePay\\Traits\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/traits',
        ),
        'WooOnePay\\Shortcodes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/shortcodes',
        ),
        'WooOnePay\\Gateways\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/gateways',
        ),
        'WooOnePay\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'WooOnePay\\Facades\\FacadeResponse' => __DIR__ . '/../..' . '/src/FacadeResponse.php',
        'WooOnePay\\Gateways\\WooOnePayDomestic' => __DIR__ . '/../..' . '/src/gateways/domestic/WooOnePayDomestic.php',
        'WooOnePay\\Gateways\\WooOnePayDomesticResponse' => __DIR__ . '/../..' . '/src/gateways/domestic/WooOnePayDomesticResponse.php',
        'WooOnePay\\Gateways\\WooOnePayGateway' => __DIR__ . '/../..' . '/src/gateways/international/WooOnePayGateway.php',
        'WooOnePay\\Gateways\\WooOnePayInternationalResponse' => __DIR__ . '/../..' . '/src/gateways/international/WooOnePayInternationalResponse.php',
        'WooOnePay\\Page' => __DIR__ . '/../..' . '/src/Page.php',
        'WooOnePay\\Responses\\WooOnepayResponse' => __DIR__ . '/../..' . '/src/WooOnepayResponse.php',
        'WooOnePay\\Shortcodes\\Thankyou' => __DIR__ . '/../..' . '/src/shortcodes/Thankyou.php',
        'WooOnePay\\Traits\\Pages' => __DIR__ . '/../..' . '/src/traits/Pages.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f72f3bb7c6ee32c2a5028b2e2d64d68::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f72f3bb7c6ee32c2a5028b2e2d64d68::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8f72f3bb7c6ee32c2a5028b2e2d64d68::$classMap;

        }, null, ClassLoader::class);
    }
}