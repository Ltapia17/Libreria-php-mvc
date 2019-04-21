<?php 


class Pages extends Controller{


	public function __construct(){

		$this->libroModel = $this->loadModels('Libro');
		$this->userModel = $this->loadModels('Users');
		$this->loginModel = $this->loadModels('Login');
		
		
	}

	public function libro(){
		$this->viewLoad('pages/libro');
	}

	public function index(){

		$libros = $this->libroModel->getLibros();
		$dates = ['libros' => $libros];
		$this->viewLoad('pages/initial' ,$dates);
	}

	 public function login(){
			 $this->viewLoad('pages/login');
			 }

	public function home(){

		if($_SERVER['REQUEST_METHOD']=='POST'){
			$dates =[
				'nick' => filter_var(strtolower($_POST['nick']),FILTER_SANITIZE_STRING),
				'contrasena' => filter_var(strtolower($_POST['contrasena']),FILTER_SANITIZE_STRING)
		];
		$result = $this->loginModel->consultLogin($dates,'usuarios');

		if($result['nick'] == $_POST['nick'] and $result['contrasena'] == $_POST['contrasena']){

			session_start();
			$_SESSION["valite"]=true;

			$this->viewLoad('pages/home/home');
			

		}else{

			if(!$_SESSION["valite"]){
				redirect('pages/login');
			}

			die(redirect('pages/login'));

		}
		
			
		}else{
			if(isset($_POST['nick']) && $_POST['contrasena']==null){
				echo "Ingrese datos";
				redirect('login');
			}
		}
		}
			
	

	public function exitLogin(){
		session_destroy();
		redirect('pages');
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

	public function addlibro(){
		if($_SERVER['REQUEST_METHOD'] =='POST'){

			$imgFile = $_FILES['imagen']['name'];
 			$tmp_dir = $_FILES['imagen']['tmp_name'];
  			$imgSize = $_FILES['imagen']['size'];

			$upload_dir = RUTE_UP_IMG.'/';
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));

			$valite_extension = array('jpeg','jpg','png','gif');

			$bookpic = rand(1000,1000000).".".$imgExt;

			if (in_array($imgExt,$valite_extension)) {
				if($imgSize < 5000000){
					move_uploaded_file($tmp_dir,$upload_dir.$bookpic);
				}
			}


			$dates = ['nombre' => trim($_POST['nombre']),
			'categoria' => trim($_POST['categoria']),
			'resumen' => trim($_POST['resumen']),
			'estrellas'=>trim($_POST['estrellas']),
			'imagen' => $bookpic
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

		$this->viewLoad('pages/Home/addlibro' ,$dates);

	}
	}

	

}

/*

if($_SERVER['REQUEST_METHOD'] =='POST'){
			$dates = ['nombre' => trim($_POST['nombre']),
			'categoria' => trim($_POST['categoria']),
			'resumen' => trim($_POST['resumen']),
			'estrellas'=>trim($_POST['estrellas']),
			'imagen' => ($_FILES['imagen'])
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

		$this->viewLoad('pages/Home/addlibro' ,$dates);

	}

	*/

	/*if(isset($_POST['ingresar'])){
			$libroname = $_POST['nombre'];
			$librocategoria = $_POST['categoria'];
			$libroresumen = $_POST['resumen'];
			$libroestrellas = $_POST['estrellas'];

			$imgfile = $_FILES['libro_img'] ['name'];
			$tmp_dir = $_FILES['libro_img'] ['tmp_name'];
			$imgsize = $_FILES['libro_img'] ['size'];

			if(empty($libroname)){
				$errMSG = "ingrese nombre de libro";
			}elseif (empty($librocategoria)) {
					$errMSG = "ingrese categoria";
			}elseif (empty($libroresumen)) {
				$errMSG = "ingrese resumen";
			}elseif (empty($libroestrellas)) {
				$errMSG = $"ingrese estrellas";
			}
			else{
				$upload_dir = RUTE_URL. 'public/images/';

				$imgExt = strtolower(pathinfo($imgfile,PATHINFO_EXTENSION));

				$valite_extension  = array('jpeg','jpg' ,'png','gif');

				$userpic = rand(1000,100000)."".$imgExt;

				if(in_array($imgExt,$valite_extension)){
					if($imgsize < 5000000) {
						move_uploaded_file($tmp_dir,$upload_dir.$userpic);
					}
					else{
						$errMSG = "imagen muy largo";
					}
				}
				else{
					$errMSG = "solo admite archivos JPG,JPEG,PNG y GIF";
				}
			}

			if(!empty($errMSG))

				$dates = []

		}

*/


 ?>