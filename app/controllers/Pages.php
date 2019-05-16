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

	
	public function pageActual(){
		//$page = isset($_GET['p']) ? (int)$_GET['p'] : 1;

		if(isset($_GET['p'])){
			$page = (int)$_GET['p'];
			return $page;
		}else{
			$page = 1;
			$this->viewLoad('pages/initial');
		}
		
		
	}
 		

	public function index($page){

		echo "Pagina: ".$page. "<br>";
		
		$libros = $this->libroModel->getBooks($page);
		$postByPage = $this->libroModel->bookByPage();
		echo "Cantidad de pagina por post: ".$postByPage;
		$dates = ['libros' => $libros];
		$this->viewLoad('pages/initial',$dates);
	}



	 public function login(){
			 $this->viewLoad('pages/login');
			 }


     public function home(){
     		
		if($_SERVER['REQUEST_METHOD']=='POST' && empty(!$_POST['nick']) && empty(!$_POST['contrasena'])){
			$dates =[
				'nick' => filter_var(strtolower($_POST['nick']),FILTER_SANITIZE_STRING),
				'contrasena' => filter_var(strtolower($_POST['contrasena']),FILTER_SANITIZE_STRING)
				];
		
					
					if ($this->loginModel->consultLogin($dates) == true) {
						session_start();
						$_SESSION['nick'] = $dates['nick'];
						$this->viewLoad('pages/home/home');
						
					}else{
						redirect('pages/login');
					}

		}else{
			if (empty($_POST['nick']) && empty($_POST['contrasena'])){
				
				
					}
			}
	
    	 }

    	 public function exitLogin(){
    	 	session_start();
    	 	if (isset($_SESSION['nick'])) { 	 		
				unset($_SESSION['nick']);
				session_destroy();
				redirect('pages');
							}	 	

    	 }


	public function register(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['nick']) && !empty($_POST['nombre']) && !empty($_POST['contrasena']) && !empty($_POST['email'])) {

			$dates = ['nick' => trim(filter_var($_POST['nick']),FILTER_SANITIZE_STRING),
			'nombre' => trim(filter_var($_POST['nombre']),FILTER_SANITIZE_STRING),
			'contrasena' => trim(filter_var($_POST['contrasena']),FILTER_SANITIZE_STRING),
			'email' => trim(filter_var($_POST['email']),FILTER_SANITIZE_STRING)
		];
						if ($this->userModel->validateDates($dates) == true){						
							echo "nick o email ya ocupados";
						}else{
							$this->userModel->agreeUsers($dates);
							redirect('pages');
						}			

						}
						$this->viewLoad('pages/register');
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

		$this->viewLoad('pages/Home/addlibro');

	}
	}

	

}


 ?>