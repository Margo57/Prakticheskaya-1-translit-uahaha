<?php
  class View {
    public function __construct() {
      echo 'Это вид.';
    }
    public function render($name, $noInclude = true) {
      if ($noInclude == false) {
        require 'views/'.$name.'.php';
      } else {
        require 'views/header.php';
        require 'views/'.$name.'.php';
        require 'views/footer.php';
      }
    }
  }
?>
