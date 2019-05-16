<?php 

class Libro{
	private $db;
	private $postbypage;

	public function __construct($postbypage = 1){
		$this->db = new Database;
		$this->postbypage = $postbypage;
	}


	
	
	public function getBooks($pages){

		$inicio = ($pages > 1) ? $pages * $this->postbypage - $this->postbypage :0;

		$this->db->query("SELECT SQL_CALC_FOUND_ROWS * FROM libros LIMIT {$inicio},{$this->postbypage}");
		$result = $this->db->getRegistersBd();
		return $result;

	}

	public function bookByPage(){
		$total_post = $this->db->query('SELECT FOUND_ROWS() as total');
		$total_post = $this->db->getNumberRowBd()['total'];
		$numberByPages = ceil($total_post / $this->postbypage);
		return $numberByPages;

	}

	/*public function getLibros(){
		$this->db->query('SELECT * FROM libros');
		$result= $this->db->getRegistersBd();
		return $result;
	}*/

	public function addBook($dates){
		$this->db->query('INSERT INTO libros (nombre,categoria,resumen,estrellas,imagen) 
		VALUES(:nombre,:categoria,:resumen,:estrellas,:imagen)');

		$this->db->bind(':nombre',$dates['nombre']);
		$this->db->bind(':categoria',$dates['categoria']);
		$this->db->bind(':resumen',$dates['resumen']);
		$this->db->bind(':estrellas',$dates['estrellas']);
		$this->db->bind(':imagen',$dates['imagen']);

		if($this->db->execute()){
			return true;
		}else{
			return false;
		}
	}

	public function editBook($dates){
		
	}
}

 ?>