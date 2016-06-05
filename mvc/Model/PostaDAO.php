<?php
class PostaDAO{
    public function insert(Posta $pt){
        $mysqli = new mysqli("127.0.0.1", "paiao", "", "usuario");
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $stmt = $mysqli->prepare("INSERT INTO Post(tiulo,posti,data,autor) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss",$pt->getTiulo(),$pt->getPosti(), $pt->getData(), $pt->getAutor());
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        return "";
    }

    public function getPosta($id){
        $mysqli = new mysqli("127.0.0.1", "paiao", "", "usuario");
        $stmt = $mysqli->prepare("SELECT * FROM Post WHERE id=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id, $tiulo, $posti, $data, $autor);
        $stmt->fetch();
        $posta= new Posta($id, $tiulo, $posti, $data, $autor);
        return $posta;
    }
    public function getPostas(){
        $mysqli = new mysqli("127.0.0.1", "paiao", "", "usuario");
        $stmt = $mysqli->prepare("SELECT * FROM Post");
        $stmt->execute();
        $arr = mysqli_fetch_all(mysqli_stmt_get_result($stmt));
        $pst = array();
        foreach($arr as $a){
            $pst[] = new Posta($a[0],$a[1],$a[2],$a[3],$a[4]);
        }
        return $pst;
    }
}

?>






