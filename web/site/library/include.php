<?php 

session_start();

// $_SERVER['DOCUMENT_ROOT'] = './site/';
$path = '/app/web/site/';

// models
require_once $pah . '/models/article_model.php';
require_once $pah . '/models/user_model.php';
require_once $pah . '/models/asset_model.php';


// library
require_once $pah . '/library/db_connect.php';
require_once $pah . '/library/db_connect.php';
require_once $pah . '/library/services.php';