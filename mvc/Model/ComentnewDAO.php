<?php
class ComentnewDAO{
    public function insert(Comentnew $cn){
        $mysqli = new mysqli("127.0.0.1", "paiao", "", "usuario");
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $stmt = $mysqli->prepare("INSERT INTO ComentNew(nome,email,coment) VALUES (?,?,?)");
        //Mudar aqui de acordo com a aula de seguranca
        $stmt->bind_param("sss",$cn->getNome(),$cn->getEmail(),$cn->getComent());
        //----------------------------------------------
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        return "";
    }
    
    public function getComentnew($id){
        $mysqli = new mysqli("127.0.0.1", "paiao", "", "usuario");
        $stmt = $mysqli->prepare("SELECT * FROM ComentNew WHERE id=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id,$nome,$email, $coment);
        $stmt->fetch();
        $comentnew = new Comentnew($id,$nome,$email,$coment);
        return $comentnew;
    }
    
     public function getComentnews(){
        $mysqli = new mysqli("127.0.0.1", "paiao", "", "usuario");
        $stmt = $mysqli->prepare("SELECT * FROM ComentNew");
        $stmt->execute();
        $arr = mysqli_fetch_all(mysqli_stmt_get_result($stmt));
        $cmt = array();
        foreach($arr as $a){
            $cmt[] = new Comentnew($a[0],$a[1],$a[2],$a[3]);
        }
        return $cmt;
    }
}

?>






