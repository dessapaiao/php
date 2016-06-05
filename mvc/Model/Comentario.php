<?php

class Comentario{
    private $id, $nome, $email,$comix;
    
    public function __construct($id, $nome,$email, $comix){
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->comix = $comix;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    
    public function getComix(){
        return $this->comix;
    }
    
}

?>