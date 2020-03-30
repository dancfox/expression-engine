<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['save_tmpl_files'] = 'y';
// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system_configuration_overrides.html

$config['app_version'] = '5.3.0';
$config['encryption_key'] = 'f402be29b5a1a196b8250bfe2d32c6ad38d08467';
$config['session_crypt_key'] = '613e5048aa345ee5dc5f7a2a6489c7e23f9fb7ea';
$config['database'] = array(
	'expressionengine' => array(
		'hostname' => 'expression-engine.cluster-cinsc7nekapx.us-east-1.rds.amazonaws.com',
		'database' => 'help_desk',
		'username' => 'admin',
		'password' => 'Nvg1hhYXFv2MUIFW4kVD',
		'dbprefix' => 'exp_',
		'char_set' => 'utf8mb4',
		'dbcollat' => 'utf8mb4_unicode_ci',
		'port'     => '3306'
	),
);

// EOF