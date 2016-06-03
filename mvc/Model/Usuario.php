<?php

class Usuario{
    private $id, $nome, $email, $login, $senha;
    
    public function __construct($id, $nome,$email, $login, $senha){
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->login = $login;
        $this->senha = $senha;
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
    
    public function getLogin(){
        return $this->login;
    }
    
    public function getSenha(){
        return $this->senha;
    }
    
}

?>