<?php
class ComentarioDAO{
    public function insert(Comentario $cm){
        $mysqli = new mysqli("127.0.0.1", "paiao", "", "usuario");
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $stmt = $mysqli->prepare("INSERT INTO Coment(nome,email,comix) VALUES (?,?,?)");
        //Mudar aqui de acordo com a aula de seguranca
        $stmt->bind_param("sss",$cm->getNome(),$cm->getEmail(),$cm->getComix());
        //----------------------------------------------
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        return "";
    }
    
    public function getComentario($id){
        $mysqli = new mysqli("127.0.0.1", "paiao", "", "usuario");
        $stmt = $mysqli->prepare("SELECT * FROM Coment WHERE id=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id,$nome,$email, $comix);
        $stmt->fetch();
        $comentario = new Comentario($id,$nome,$email,$comix);
        return $comentario;
    }
    
     public function getComentarios(){
        $mysqli = new mysqli("127.0.0.1", "paiao", "", "usuario");
        $stmt = $mysqli->prepare("SELECT * FROM Coment");
        $stmt->execute();
        $arr = mysqli_fetch_all(mysqli_stmt_get_result($stmt));
        $resd = array();
        foreach($arr as $a){
            $comt[] = new Comentario($a[0],$a[1],$a[2],$a[3]);
        }
        return $comt;
    }
}

?>






