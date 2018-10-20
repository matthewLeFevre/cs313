<?php 
  include '/app/web/site/library/include.php';
  
  $app = new Server();

  $app->listen();

  $action = $app->getAction();

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
