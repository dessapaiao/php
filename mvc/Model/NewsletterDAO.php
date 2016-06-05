<?php
class NewsletterDAO{
    public function insert(Newsletter $nl){
        $mysqli = new mysqli("127.0.0.1", "paiao", "", "usuario");
        if ($mysqli->connect_errno) {
            return "Falha no MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $stmt = $mysqli->prepare("INSERT INTO New (name,email) VALUES (?,?)");
        //Mudar aqui de acordo com a aula de seguranca
        $stmt->bind_param("ss",$nl->getNome(),$nl->getEmail());
        //----------------------------------------------
        if (!$stmt->execute()) {
            return "Erro: (" . $stmt->errno . ") " . $stmt->error . "<br>";
        }
        $stmt->close();
        return "";
    }

    public function getNewsletter($id){
        $mysqli = new mysqli("127.0.0.1", "paiao", "", "usuario");
        $stmt = $mysqli->prepare("SELECT * FROM New WHERE id=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->bind_result($id,$nome,$email);
        $stmt->fetch();
        $newsletter= new Newsletter($id,$nome,$email);
        return $newsletter;
    }
     public function getNewsletters(){
        $mysqli = new mysqli("127.0.0.1", "paiao", "", "usuario");
        $stmt = $mysqli->prepare("SELECT * FROM New");
        $stmt->execute();
        $arr = mysqli_fetch_all(mysqli_stmt_get_result($stmt));
        $nes = array();
        foreach($arr as $a){
            $nes[] = new Newsletter($a[0],$a[1],$a[2]);
        }
        return $nes;
    }
    
}

?>






