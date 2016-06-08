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
        if(!isset($_SESSION["_ID"]))
             header("Location: /login/formulario");
        else
            $this->view->renderizar("adminresenha");
        }    
    
    public function admincadastro(){
        if(!isset($_SESSION["_ID"]))
             header("Location: /login/formulario");
        else
            $this->view->renderizar("admincadastro");
        }  
    
    public function adminposta(){
        if(!isset($_SESSION["_ID"]))
             header("Location: /login/formulario");
        else
            $this->view->renderizar("adminposta");
        } 
    
    public function admincomentario(){
        if(!isset($_SESSION["_ID"]))
             header("Location: /login/formulario");
        else{
            $p = new ComentarioDAO();
            $todosComt = $p->getComentarios();
            $this->view->interpolar("admincomentario",$todosComt);
        } 
    }
    public function adminnewsletter(){
        if(!isset($_SESSION["_ID"]))
             header("Location: /login/formulario");
        else{
            $p = new NewsletterDAO();
            $todosNes = $p->getNewsletters();
            $this->view->interpolar("adminnewsletter",$todosNes);
        } 
    }
    public function admincontato(){
        if(!isset($_SESSION["_ID"]))
             header("Location: /login/formulario");
        else{
            $cd = new ContatoDAO();
            $todosCont = $cd->getContatos();
            $this->view->interpolar("admincontato",$todosCont);
        } 
    }
    public function adminusuario(){
        if(!isset($_SESSION["_ID"]))
             header("Location: /login/formulario");
        else{
            $us = new usuarioDAO();
            $todosUsu = $us->getUsuarios();
            $this->view->interpolar("adminusuario",$todosUsu);
        }
    }   
    
    public function admin(){
        if(!isset($_SESSION["_ID"]))
             header("Location: /login/formulario");
        else{
            $id = $_GET["arg0"];
            //PEGANDO DADOS DO MODEL
            $userDao = new UsuarioDAO();
            $usuario = $userDao->getUsuario($id);
            // -----------------------------
            // MANDANDO PARA VIEW
            $dado["nome"] = $usuario->getNome();
            $dado["login"] = $usuario->getLogin();
            $this->view->interpolar("admin",$dado);
        }
    }
    public function admincomentarios(){
        if(!isset($_SESSION["_ID"]))
             header("Location: /login/formulario");
        else{
            $e = new ComentnewDao();
            $todosCmt = $e->getComentnews();
            $this->view->interpolar("admincomentarios",$todosCmt);
            }   
        }
    
    
}

?>

