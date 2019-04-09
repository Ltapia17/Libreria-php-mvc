<?php


class Users{

    private $db;

    public function __construct(){
        $this->db= new Database;
    }

    public function getUsers(){
        $this->db->query('SELECT * FROM usuarios');

        $result = $this->db->registers();
        return $result;
    }

    public function agreeUsers($dates){
        $this->db->query('INSERT INTO usuarios(nick,nombre,contrasena,email)VALUES(:nick,:nombre,:contrasena,:email)');
        $this->db->bind(':nick',$dates['nick']);
        $this->db->bind(':nombre',$dates['nombre']);
        $this->db->bind(':contrasena',$dates['contrasena']);
        $this->db->bind(':email',$dates['email']);
        

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}

?>