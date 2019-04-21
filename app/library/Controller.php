<?php 

class Controller{

	public function loadModels($model){
		require_once '../app/models/'. $model. '.php';
		return new $model();
	}

	public function viewLoad($view,$dates=[]){
		if(file_exists('../app/views/'.$view .'.php')){
			require_once '../app/views/'.$view.'.php';
		}else{
			die('la vista no existe');
		}
	}

	

	
}

 ?>