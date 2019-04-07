<?php 

class Pages extends Controller{



	public function __construct(){

		$this->libroModel = $this->loadModels('Libro');
	}

	public function index(){

		$libros = $this->libroModel->getLibros();
		$dates = ['libros' => $libros];
		$this->viewLoad('pages/initial' ,$dates);
	}

	public function login(){
		$this->viewLoad('pages/login');
	}
}

 ?>