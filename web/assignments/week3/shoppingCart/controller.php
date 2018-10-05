<?php

// Create or access a session

session_start();

$action = filter_input(INPUT_POST, 'action');

if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
  if($action == NULL){
    $action = 'home';
  }
}
$_SESSION['action'] = $action;


switch($action) {
  case 'addItems':
    $cost = filter_input(INPUT_POST, 'cost', FILTER_SANITIZE_NUMBER_INT);
    $quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT);
    $trueCost = $cost * $quantity;
    $product = filter_input(INPUT_POST, 'product', FILTER_SANITIZE_STRING);
    $item = ["product" => $product, "cost"=> $trueCost, "quantity"=> $quantity];
    $_SESSION['items'][] = $item;
    include "./index.php";
  break;
  case 'viewCart':
    include "./cart.php";
  break;
  case 'checkout':
    include 'checkout.php';
  break;
  case 'confirm':
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $_SESSION['user'] = ["name" => $name, "address" => $address];
    include 'confirmation.php';
  break;
  case 'removeItem':
  $item = filter_input(INPUT_POST, 'itemLocation', FILTER_SANITIZE_NUMBER_INT);
  unset($_SESSION['items'][$item]);
  include "./cart.php";
  break;
}