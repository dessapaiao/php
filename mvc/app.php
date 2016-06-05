<?php

class App{
    //VEM DA URL
    private $met, $clazz;
    
    public function __construct($met,$clazz){
        $this->met = $met;
        $this->clazz = $clazz;
    }
    
    public function startApp(){
        $clazzName = ucfirst($this->clazz) . "Controller";
        $modelName = ucfirst($this->clazz) ;
            require_once "Model/Usuario.php";
            require_once "Model/UsuarioDAO.php";
            require_once "Model/Contato.php";
            require_once "Model/ContatoDAO.php";
            require_once "Model/Newsletter.php";
            require_once "Model/NewsletterDAO.php";
            require_once "Model/Comentnew.php";
            require_once "Model/ComentnewDAO.php";
            require_once "Model/Posta.php";
            require_once "Model/PostaDAO.php";
            require_once "Model/Resenha.php";
            require_once "Model/ResenhaDAO.php";
            require_once "Model/Comentario.php";
            require_once "Model/ComentarioDAO.php";
            
            require_once "Controller/Controller.php";
        require_once "Controller/" . $clazzName . ".php";
        $hc = new $clazzName();
        $met = $this->met;
        $hc->$met();
    }
}

session_start();
require_once "view/View.php";

$met = $_GET["metodo"];
$clazz = $_GET["classe"];
$r = new App($met,$clazz);
$r->startApp();

?>