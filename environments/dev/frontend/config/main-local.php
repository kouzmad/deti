<?php

$config = [
    'components' => [
        'request' => array(
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            //'cookieValidationKey' => '',
            'cookieValidationKey' => $params['cookieValidationKey'],
        ),
        'authClientCollection' => [
    'class' => 'yii\authclient\Collection',
    'clients' => [
        'vk' => [
            'class' => 'yii\authclient\clients\VKontakte',
            'clientId' => '',
            'clientSecret' => '',
        ],
    ],
]
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
