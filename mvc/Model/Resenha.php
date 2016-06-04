<?php

class Resenha{
    private $id,$nome,$opiniao,$tipo,$video,$autor;
    
    public function __construct($id,$nome,$opiniao,$tipo,$video,$autor){
        $this->id = $id;
        $this->nome = $nome;
        $this->opiniao = $opiniao;
        $this->tipo = $tipo;
        $this->video = $video;
        $this->autor = $autor;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getOpiniao(){
        return $this->opiniao;
    }
    
    public function getTipo(){
        return $this->tipo;
    }
    
    public function getVideo(){
        return $this->video;
    }
        public function getAutor(){
        return $this->autor;
    }
    
}

?>