<?php

class ContatoDAO{
    public function insert(Contato $m){
        $mysqli = new mysqli("127.0.0.1", "paiao", "", "usuario");
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $stmt = $mysqli->prepare("INSERT INTO Contato(name,email,mensagem) VALUES (?,?,?)");
        //Mudar aqui de acordo com a aula de seguranca
        $stmt->bind_param("sss",$m->getNome(),$m->getEmail(),$m->getMensagem());
        //----------------------------------------------
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        return "";
    }
    
    public function getContato($id){
        $mysqli = new mysqli("127.0.0.1", "paiao", "", "usuario");
        $stmt = $mysqli->prepare("SELECT * FROM Contato WHERE id=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id,$nome,$email, $mensagem);
        $stmt->fetch();
        $contato = new Contato($id,$nome,$email,$mensagem);
        return $contato;
    }
    
   
}
  
?>






