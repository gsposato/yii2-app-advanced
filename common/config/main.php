<?php
return [
	'aliases' => [
        '@bower' => '@vendor/yidas/yii2-bower-asset/bower'
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
