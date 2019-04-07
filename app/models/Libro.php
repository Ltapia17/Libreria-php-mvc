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
}

 ?>