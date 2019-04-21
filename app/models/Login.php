<?php 

class Login{

	private $db;
	
	
	public function __construct(){
		$this->db = new Database;
		
	}

	public function consultLogin($dates,$usuarios){
		$this->db->query('SELECT nick, contrasena FROM usuarios WHERE nick=:nick AND contrasena  = :contrasena');
		$this->db->bind(':nick',$dates['nick'],PDO::PARAM_STR);
		$this->db->bind(':contrasena',$dates['contrasena'],PDO::PARAM_STR);
		$this->db->execute();
		return $this->db->getRegister();
		$this->close();

		
		

	}
	
}

 ?>