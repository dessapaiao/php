<?php

class UsuarioController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
    
    public function cadastro(){
        $this->view->renderizar("cadastro");
    }
    public function news(){
        $this->view->renderizar("news");
    }
    
     public function admin(){
        $id = $_GET["arg0"];
        //PEGANDO DADOS DO MODEL
        $userDao = new UsuarioDAO();
        $usuario = $userDao->getUsuario($id);
        // -----------------------------
        // MANDANDO PARA VIEW
        $dado["nome"] = $usuario->getNome();
        $dado["login"] = $usuario->getLogin();
        $this->view->interpolar("admin",$dado);
        // ------------------------------
    }
    

    
    public function sucesso(){
        $this->view->renderizar("sucesso");
    }
    
    public function inserir(){
        //OBTEM DA VIEW
        $nome = $_POST["nome"];
        $email= $_POST["email"];
        $login= $_POST["login"];
        $senha = $_POST["senha"];
        //ignorar, pois, eh A_I
        $usuario = new Usuario(0,$nome,$email,$login,$senha);
        $userDao = new UsuarioDAO();
        //PASSA AO MODEL
        $ret = $userDao->insert($usuario);
        if($ret === ""){
            header("Location: /usuario/sucesso");    
        }else{
            $this->view->interpolar("errosql",$ret);
        }
        
    }
    
    public function inserirNews(){
        //OBTEM DA VIEW
        $nome = $_POST["nome"];
        $email= $_POST["email"];
        ;
        //ignorar, pois, eh A_I
        $newsLetter = new NewsLetter(0,$nome,$email);
        $newsLetterDao = new NewsLetterDAO();
        //PASSA AO MODEL
        $ret = $newsDao->insert($NewsLetter);
        if($ret === ""){
            header("Location: /usuario/sucesso");    
        }else{
            $this->view->interpolar("errosql",$ret);
        }
        
    }
    
    
}

?>