<?php

class Contato{
    private $id, $nome, $email, $mensagem;
    
    public function __construct($id, $nome,$email, $mensagem){
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->mensagem = $mensagem;
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
    
    public function getMensagem(){
        return $this->mensagem;
    }
    
}

?>