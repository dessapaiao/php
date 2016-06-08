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
        $this->estaAutorizado();
        $this->view->renderizar("adminresenha");
        }    
    
    public function admincadastro(){
        $this->estaAutorizado();
        $this->view->renderizar("admincadastro");
        }  
    
    public function adminposta(){
        $this->estaAutorizado();
        $this->view->renderizar("adminposta");
        } 
    
    public function admincomentario(){
        $this->estaAutorizado();
        $p = new ComentarioDAO();
        $todosComt = $p->getComentarios();
        $this->view->interpolar("admincomentario",$todosComt);
        } 
    
    public function adminnewsletter(){
        $this->estaAutorizado();
        $p = new NewsletterDAO();
        $todosNes = $p->getNewsletters();
        $this->view->interpolar("adminnewsletter",$todosNes);
        
    }
    public function admincontato(){
        $this->estaAutorizado();
        $cd = new ContatoDAO();
        $todosCont = $cd->getContatos();
        $this->view->interpolar("admincontato",$todosCont);
         
    }
    public function adminusuario(){
        $this->estaAutorizado();
        $us = new usuarioDAO();
        $todosUsu = $us->getUsuarios();
        $this->view->interpolar("adminusuario",$todosUsu);
    }
      
    
    public function admin(){
        $this->estaAutorizado();
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
        $this->estaAutorizado();
        $e = new ComentnewDao();
        $todosCmt = $e->getComentnews();
        $this->view->interpolar("admincomentarios",$todosCmt);
              
        }
    
    
}

?>

