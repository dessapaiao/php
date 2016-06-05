<?php

class Posta{
    private $id, $tiulo, $posti, $data, $autor;
    
    public function __construct($id, $tiulo, $posti, $data, $autor){
        $this->id = $id;
        $this->tiulo = $tiulo;
        $this->posti = $posti;
        $this->data = $data;
        $this->autor = $autor;
        
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getTiulo(){
        return $this->tiulo;
    }
    public function getPosti(){
        return $this->posti;
    }
    
    public function getData(){
        return $this->data;
    }
    
    public function getAutor(){
        return $this->autor;
    }
}

?>