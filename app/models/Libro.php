<?php 

class Libro{
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	

	public function getLibros(){
		$this->db->query('SELECT * FROM libros');
		$result= $this->db->getRegisters();
		return $result;
	}

	public function addBook($dates){
		$this->db->query('INSERT INTO libros (nombre,categoria,resumen,estrellas) 
		VALUES(:nombre,:categoria,:resumen,:estrellas)');

		$this->db->bind(':nombre',$dates['nombre']);
		$this->db->bind(':categoria',$dates['categoria']);
		$this->db->bind(':resumen',$dates['resumen']);
		$this->db->bind(':estrellas',$dates['estrellas']);

		if($this->db->execute()){
			return true;
		}else{
			return false;
		}
	}
}

 ?>