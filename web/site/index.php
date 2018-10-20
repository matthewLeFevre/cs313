<?php 
  include '/app/web/site/library/include.php';
  
  // $app = new Server();

  // $app->listen();

  // $action = $app->getAction();

  $action = filter_input(INPUT_POST, 'action');
  if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
    if($action == NULL){
      $action = 'home';
    }
  }

  switch($action) {
    case 'home':
      include 'views/home.php'
    break;
    case 'blog':
      include 'views/blog.php';
    break;
    case 'profile':
      if($_SESSION['isloggedin']) {
        include 'views/profile.php';
      } else {
        header('location: /app/web/site/index.php');
      }
    break;
    default:
      header('location: /app/web/site/index.php');
    break;
  }
