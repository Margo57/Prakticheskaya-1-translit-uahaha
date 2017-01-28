<?php
<<<<<<< HEAD
class Help extends Controller {
	
    public function __construct() {
    	parent::__construct();
=======
  class Help extends Controller {
    function __construct() {
      parent::__construct();
      echo "Мы в контроллере Help!";
>>>>>>> parent of 6d02d5a... Начинается какая-то дичь с контроллерами.
    }

    public function index() {
   		$this->view->render('help/index');
    }

}

?>
