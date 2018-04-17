<?php
  include_once('includes/init.php');

  session_destroy();

  session_start();
  
  header('Location: ./');
?>
