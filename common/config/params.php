<?php

Yii::setAlias('common', realpath(__DIR__ . '/../'));
Yii::setAlias('frontend', realpath(__DIR__ . '/../../frontend'));
Yii::setAlias('backend', realpath(__DIR__ . '/../../backend'));
Yii::setAlias('console', realpath(__DIR__ . '/../../console'));

return [
	'adminEmail' => 'admin@example.com',
	'supportEmail' => 'support@example.com',

	'components.cache' => [
		'class' => 'yii\caching\FileCache',
	],

	'components.mail' => [
		'class' => 'yii\swiftmailer\Mailer',
		'viewPath' => '@common/mails',
	],

	'components.db' => [
		'class' => 'yii\db\Connection',
		'dsn' => 'mysql:host=localhost;dbname=cuotaderanet',
		'username' => 'cuotaderanet',
		'password' => 'ZN5u6PcZ5TetSFKL',
		'charset' => 'utf8',
	],
];
