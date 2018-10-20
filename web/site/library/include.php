<?php 

session_start();

// $_SERVER['DOCUMENT_ROOT'] = './site/';

// models
require_once $_SERVER['DOCUMENT_ROOT'] . '/web/site/models/article_model.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/web/site/models/user_model.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/web/site/models/asset_model.php';


// library
require_once $_SERVER['DOCUMENT_ROOT'] . '/web/site/library/db_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/web/site/library/db_connect.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/web/site/library/services.php';