<?php return array(
    'root' => array(
        'pretty_version' => '1.0.2',
        'version' => '1.0.2.0',
        'type' => 'shopware-platform-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => 'fluttewave/pay-plugin',
        'dev' => true,
    ),
    'versions' => array(
        'flutterwavedev/flutterwave-v3' => array(
            'pretty_version' => '1.0.1',
            'version' => '1.0.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../flutterwavedev/flutterwave-v3',
            'aliases' => array(),
            'reference' => '7a13ec67c77249a35ce5d7ef28dc158c1572c07c',
            'dev_requirement' => false,
        ),
        'fluttewave/pay-plugin' => array(
            'pretty_version' => '1.0.2',
            'version' => '1.0.2.0',
            'type' => 'shopware-platform-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
        'mashape/unirest-php' => array(
            'pretty_version' => 'v3.0.4',
            'version' => '3.0.4.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../mashape/unirest-php',
            'aliases' => array(),
            'reference' => '842c0f242dfaaf85f16b72e217bf7f7c19ab12cb',
            'dev_requirement' => false,
        ),
        'monolog/monolog' => array(
            'pretty_version' => '2.3.5',
            'version' => '2.3.5.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../monolog/monolog',
            'aliases' => array(),
            'reference' => 'fd4380d6fc37626e2f799f29d91195040137eba9',
            'dev_requirement' => false,
        ),
        'psr/log' => array(
            'pretty_version' => '1.1.4',
            'version' => '1.1.4.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/log',
            'aliases' => array(),
            'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
            'dev_requirement' => false,
        ),
        'psr/log-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.0.0 || 2.0.0 || 3.0.0',
            ),
        ),
        'seunex17/flutterwave-php-payment-gateway' => array(
            'pretty_version' => 'v1.0.0',
            'version' => '1.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../seunex17/flutterwave-php-payment-gateway',
            'aliases' => array(),
            'reference' => '865780cffdf97f7c590c265bf297e78becedda61',
            'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => array(
            'pretty_version' => 'v1.24.0',
            'version' => '1.24.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-ctype',
            'aliases' => array(),
            'reference' => '30885182c981ab175d4d034db0f6f469898070ab',
            'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => array(
            'pretty_version' => 'v2.6.9',
            'version' => '2.6.9.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../vlucas/phpdotenv',
            'aliases' => array(),
            'reference' => '2e93cc98e2e8e869f8d9cfa61bb3a99ba4fc4141',
            'dev_requirement' => false,
        ),
    ),
);
