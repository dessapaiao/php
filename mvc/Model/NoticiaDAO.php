<?php

class NoticiaDAO{
    public function insert(Noticia $n){
        $mysqli = new mysqli("127.0.0.1", "paiao", "", "usuario");
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $stmt = $mysqli->prepare("INSERT INTO Noticia (titulo,foto,noticia,autor) VALUES (?,?,?,?)");
        //Mudar aqui de acordo com a aula de seguranca
         $stmt->bind_param("ssss",$n->getTitulo(),$n->getFoto(),$n->getNoticia(),$n->getAutor());
        //----------------------------------------------
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        return "";
    }
    
    public function getNoticia($id){
        $mysqli = new mysqli("127.0.0.1", "paiao", "", "usuario");
        $stmt = $mysqli->prepare("SELECT * FROM Noticia WHERE id=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id,$titulo,$foto,$noticia,$autor);
        $stmt->fetch();
        $noticia= new Noticia($id,$titulo,$foto,$noticia,$autor);
        return $noticia;
    }
}

?>






