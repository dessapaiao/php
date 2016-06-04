<?php
class ResenhaDAO{
    public function insert(Resenha $r){
        $mysqli = new mysqli("127.0.0.1", "paiao", "", "usuario");
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $stmt = $mysqli->prepare("INSERT INTO Resenha (nome,opiniao,tipo,video,autor) VALUES (?,?,?,?,?)");
        //Mudar aqui de acordo com a aula de seguranca
        $stmt->bind_param("sssss",$r->getNome(),$r->getOpiniao(),$r->getTipo(),$r->getVideo(),$r->getAutor());
        //----------------------------------------------
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        return "";
    }

    public function getResenha($id){
        $mysqli = new mysqli("127.0.0.1", "paiao", "", "usuario");
        $stmt = $mysqli->prepare("SELECT * FROM Resenha WHERE id=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id,$nome,$opiniao,$tipo,$video,$autor);
        $stmt->fetch();
        $resenha= new Resenha($id,$nome,$opiniao,$tipo,$video,$autor);
        return $resenha;
    }
    
    public function getResenhas(){
        $mysqli = new mysqli("127.0.0.1", "paiao", "", "usuario");
        $stmt = $mysqli->prepare("SELECT * FROM Resenha");
        $stmt->execute();
        $arr = mysqli_fetch_all(mysqli_stmt_get_result($stmt));
        $resd = array();
        foreach($arr as $a){
            $resd[] = new Resenha($a[0],$a[1],$a[2],$a[3],$a[4],$a[5]);
        }
        return $resd;
    }
}

?>






