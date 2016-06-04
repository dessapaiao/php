<?php

class HomeController extends Controller{
    
    public function __call($m,$a){
        $this->view->renderizar("erro");
    }
    
    public function cadastro(){
        $this->view->renderizar("cadastro");
    }
    public function news(){
        $this->view->renderizar("news");
    }
    
    public function sucesso(){
        $this->view->renderizar("sucesso");
    }
    
    public function index(){
        $this->view->renderizar("index");
    }
    
    public function noticia(){
        $this ->view->renderizar("noticia");
    }
    
    public function contato(){
        $this ->view->renderizar("contato");
    }
    
    
    
    public function resenha(){
        $p = new ResenhaDAO();
        $todosResd = $p->getResenhas();
        $this->view->interpolar("resenha",$todosResd);
    }
    
    
}

?>
    