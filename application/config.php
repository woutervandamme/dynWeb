<?php
date_default_timezone_set('Europe/Brussels');

// local_u0034562 => 'host' => 'localhost'
//require_once('../../../.db_password.php');
// u0034562 via mamp => 'host' => 'gegevensbanken.khleuven.be'
require_once('.db_password.php');

$db_config = array(
    'driver' => 'pgsql',
    'username' =>'r0427697',
    'password' => 'khXanklateuris1en',
    'schema' => 'project_r0427697',
    'dsn' => array(
        'host' => 'gegevensbanken.khleuven.be',
        'dbname' => '2TX35',
        'port' => '51314',
    )
);
