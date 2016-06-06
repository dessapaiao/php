<?php

class LoginController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
    
    public function logout(){
        $this->estaAutorizado();
        unset($_SESSION["_ID"]);
        $this->view->renderizar("logout");
    }
    
    public function formulario(){
        unset($_SESSION["_ID"]);
        $this->view->renderizar("login");
    }
    
     public function autenticar(){
        $um = new UsuarioDAO();
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        //Sera falsa se nao encontrar
        //Sera o id se encontrar
        $ehLoginCorreto = $um->authUser($login,$senha);
        if($ehLoginCorreto === false)
            header("Location: /login/formulario");
        else{
            $_SESSION["_ID"] = $ehLoginCorreto;
            header("Location: /login/admin/" . $ehLoginCorreto);
        }
     }
    
    public function adminresenha(){
        $this->view->renderizar("adminresenha");
    }
    public function admincadastro(){
        $this->view->renderizar("admincadastro");
    }
    public function adminposta(){
        $this->view->renderizar("adminposta");
    }
    
    public function admincomentario(){
        $p = new ComentarioDAO();
        $todosComt = $p->getComentarios();
        $this->view->interpolar("admincomentario",$todosComt);
    }
    public function adminnewsletter(){
        $p = new NewsletterDAO();
        $todosNes = $p->getNewsletters();
        $this->view->interpolar("adminnewsletter",$todosNes);
    }
    public function admincomentarios(){
        $e = new ComentnewDao();
        $todosCmt = $e->getComentnews();
        $this->view->interpolar("admincomentarios",$todosCmt);
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
    
}

?>

