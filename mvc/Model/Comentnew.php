<?php

class Comentnew{
    private $id, $nome, $email,$coment;
    
    public function __construct($id, $nome,$email, $coment){
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->coment = $coment;
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
    
    public function getComent(){
        return $this->coment;
    }
    
}

?>