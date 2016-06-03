<?php

class Noticia{
    private $id, $titulo, $foto, $noticia, $autor;
    
    public function __construct($id, $titulo, $foto, $noticia, $autor){
        $this->id = $id;
        $this->titulo = $titulo;
        $this->foto = $foto;
        $this->noticia = $noticia;
        $this->autor= $autor;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getTitulo(){
        return $this->titulo;
    }
    
    public function getFoto(){
        return $this->foto;
    }
    
    public function getNoticia(){
        return $this->noticia;
    }
    public function getAutor(){
        return $this->autor;
    }
}

?>