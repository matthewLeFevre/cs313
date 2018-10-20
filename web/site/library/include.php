<?php 

session_start();

// $_SERVER['DOCUMENT_ROOT'] = './site/';
$path = '/app/web/site/';

// models
require_once $path . '/models/article_model.php';
require_once $path . '/models/user_model.php';
require_once $path . '/models/asset_model.php';


// library
require_once $path . '/library/db_connect.php';
require_once $path . '/library/db_connect.php';
require_once $path . '/library/services.php';