<?php
require_once 'Config.class.php';

$conf = new Config();

$conf->root_path = dirname(__FILE__);
$conf->server_name = '192.168.50.16';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/php_05';
$conf->app_url = $conf->server_url.$conf->app_root;
?>