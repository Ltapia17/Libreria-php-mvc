<?php 

class Pages extends Controller{



	public function __construct(){

		$this->libroModel = $this->loadModels('Libro');
		$this->userModel = $this->loadModels('Users');
	}

	public function index(){

		$libros = $this->libroModel->getLibros();
		$dates = ['libros' => $libros];
		$this->viewLoad('pages/initial' ,$dates);
	}

	public function login(){
		$this->viewLoad('pages/login');
	}

	public function register(){

	if($_SERVER['REQUEST_METHOD']== 'POST'){
			$dates = ['nick' =>trim($_POST['nick']),
			'nombre' =>trim($_POST['nombre']),
			'contrasena' =>trim($_POST['contrasena']),
			'email' =>trim($_POST['email'])
			
		];

		if($this->userModel->agreeUsers($dates)){
			redirect('pages');
		}else{
			die('algo salio mal');
		}
	}else{
			$dates = [
				'nick' => '',
				'nombre' => '',
				'contrasena' => '',
				'email' => ''
				
			];

			$this->viewLoad('pages/register',$dates);
		}
		
		
	}

	public function libro(){
		if($_SERVER['REQUEST_METHOD'] =='POST'){
			$dates = ['nombre' => trim($_POST['nombre']),
			'categoria' => trim($_POST['categoria']),
			'resumen' => trim($_POST['resumen']),
			'estrellas'=>trim($_POST['estrellas'])
			];
			if($this->libroModel->addBook($dates)){
				redirect('pages');
			}else{
				die('Algo saio mal');
			}
	}else{
		$dates = [
			'nombre' => '',
			'categoria' => '',
			'resumen' => '',
			'estrellas' => ''
		];

		$this->viewLoad('pages/libro' ,$dates);

	}
}

}


 ?>