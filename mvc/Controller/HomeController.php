<?php

class HomeController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
        require_once("view/footer.php");
    }
    
    public function cadastro(){
        $this->view->renderizar("cadastro");
        require_once("view/footer.php");
    }
    public function news(){
        $this->view->renderizar("news");
        require_once("view/footer.php");
    }
    
    public function sucesso(){
        $this->view->renderizar("sucesso");
        require_once("view/footer.php");
    }
    
    public function index(){
        $c = new PostaDAO();
        $todosUlt = $c->getUltimas();
        $this->view->interpolar("index",$todosUlt);
        require_once("view/footer.php");
    }
    
    
     public function contato(){
        $this ->view->renderizar("contato");
        require_once("view/footer.php");
    }
    
    
    public function sobre(){
        $this ->view->renderizar("sobre");
        require_once("view/footer.php");
    }
    
    public function resenha(){
        $p = new ResenhaDAO();
        $todosResd = $p->getResenhas();
        $this->view->interpolar("resenha",$todosResd);
        require_once("view/footer.php");
    }
    
      public function noticia(){
        $c = new PostaDAO();
        $todosPst = $c->getPostas();
        $this->view->interpolar("noticia",$todosPst);
        require_once("view/footer.php");
    }


    
}

?>
    