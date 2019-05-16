<?php 

class Login{

	private $db;
	
	
	public function __construct(){
		$this->db = new Database;
		
	}

	public function consultLogin($dates){
		$this->db->query('SELECT nick, contrasena FROM usuarios WHERE nick=:nick AND contrasena  = :contrasena');
		$this->db->bind(':nick',$dates['nick']);
		$this->db->bind(':contrasena',$dates['contrasena']);
		$result = $this->db->getRegisterBd();
		$row = $this->db->rowCount($result);
		if ($row > 0) {
			return true;
		}else{
			return false;
		}
		
		

	}
	
}

 ?>