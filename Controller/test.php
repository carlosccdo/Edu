<?php 
class Test extends Controller{

	public function __construct(){
		parent::__construct();
		$this->view->render("test/index");
	}

	public function crearUsuario(){
			$this->modelo->insert();
	}
} 


 ?>