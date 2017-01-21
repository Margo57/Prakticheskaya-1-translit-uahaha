<?php
  class Error extends Controller {
    function __construct() {
      parent::__construct();
      $this -> view -> msg = 'Страницы не существует.';
      $this -> view -> render('error/index');
    }
  }
?>
