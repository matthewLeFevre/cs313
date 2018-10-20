<?php 
  if(!isset($_SESSION['loggedin'])) {
    header('Location: /site/index.php');
  }
  require_once './head.php';
  $indexHead = new Head("$_SESSION['userData']['userName'] Profile");
?><!DOCTYPE html>
<html lang="en">

<?php echo($indexHead->add()); ?>
<body>
  
</body>
</html>