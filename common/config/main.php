<?php
return [
	'name' => 'okChain',
	//'language'=>'ru-RU',
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
