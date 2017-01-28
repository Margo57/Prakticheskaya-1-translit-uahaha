<?php

  class Boostrap {
    public function __construct() {

      $url = isset($_GET['url']) ? $_GET['url'] : null;
      $url = rtrim($url, '/'); //функция rtrim удаляет символ с конца строки
      $url = explode('/', $url);  //метод explode разбивает строку с помощью разделителя

      if (empty($url['0'])) {
        require 'controllers/index.php';

        $controller = new Index();
        $controller->index();
        
        return false;
      }

      $file = "controllers/".$url[0].".php"; //в первом параметре название контроллера, подключаем контроллер

      if (file_exists($file)) {
        require($file);
      } else {
        require 'controllers/error.php';
        $controller = new Error();
        return false;
      }
      
      $controller = new $url[0];
      $controller->loadModel($url[0]);

if(isset($url[2])) {
  if(method_exists($controller, $url[1])) {
   $controller->{$url[1]}($url[2]);
  } else {
   echo 'Error!';
  }
} else {
  if(isset($url[1])) {
   $controller->{$url[1]}();
  } else {
   $controller->index();
  }
}

    }
  }
?>
