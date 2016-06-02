<?php

class NewsLetter{
    private $id, $nome;
    
    public function __construct($id, $nome,$email){
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        
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
    
    
}

?>