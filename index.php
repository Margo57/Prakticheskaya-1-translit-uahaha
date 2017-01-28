<?php
  header('Content-Type: text/html; charset=utf-8');

  require 'config/database.php';
  require 'config/paths.php';
  require 'libs/Boostrap.php';
  require 'libs/Controller.php';
  require 'libs/Model.php';
  require 'libs/View.php';
  require 'libs/Database.php';
  require 'libs/Session.php';
  $app = new Boostrap();
?>
