<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4bff8b9b44a37214902844572b08cef6
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '3f8bdd3b35094c73a26f0106e3c0f8b2' => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/SendGrid.php',
        '9dda55337a76a24e949fbcc5d905a2c7' => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/helpers/mail/Mail.php',
        '5d7e2090c9a3b69b2ff2fceddeadca94' => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/helpers/contacts/Recipients.php',
        '04a9a7b26fb79fbd712347cc9bc9d9be' => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/helpers/stats/Stats.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Telegram\\Bot\\' => 13,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
            'SendGrid\\' => 9,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'L' => 
        array (
            'Litipk\\BigNumbers\\' => 18,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Contracts\\' => 21,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Telegram\\Bot\\' => 
        array (
            0 => __DIR__ . '/..' . '/irazasyed/telegram-bot-sdk/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'SendGrid\\' => 
        array (
            0 => __DIR__ . '/..' . '/sendgrid/php-http-client/lib',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Litipk\\BigNumbers\\' => 
        array (
            0 => __DIR__ . '/..' . '/litipk/php-bignumbers/src',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Doctrine\\Common\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Common/Inflector',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/nesbot/carbon/src',
        1 => __DIR__ . '/..' . '/league/color-extractor/src',
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'claviska' => 
            array (
                0 => __DIR__ . '/..' . '/claviska/simpleimage/src',
            ),
        ),
        'D' => 
        array (
            'Detection' => 
            array (
                0 => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/namespaced',
            ),
        ),
    );

    public static $classMap = array (
        'Mobile_Detect' => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/Mobile_Detect.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4bff8b9b44a37214902844572b08cef6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4bff8b9b44a37214902844572b08cef6::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit4bff8b9b44a37214902844572b08cef6::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4bff8b9b44a37214902844572b08cef6::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit4bff8b9b44a37214902844572b08cef6::$classMap;

        }, null, ClassLoader::class);
    }
}