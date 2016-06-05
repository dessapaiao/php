<?php

class UsuarioController extends Controller{
    
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
    
    public function cadastroUsuario(){
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
            header("Location: /home/sucesso");    
        }else{
            $this->view->interpolar("errosql",$ret);
        }
        
    }
    public function cadastroComentario(){
        //OBTEM DA VIEW
        $nome = $_POST["nome"];
        $email= $_POST["email"];
        $comix = $_POST["comix"];
        //ignorar, pois, eh A_I
        $comentario = new Comentario(0,$nome,$email,$comix);
        $comDao = new ComentarioDAO();
        //PASSA AO MODEL
        $ret = $comDao->insert($comentario);
        if($ret === ""){
            header("Location: /home/sucesso");    
        }else{
            $this->view->interpolar("errosql",$ret);
        }
        
    }
    public function CadastroContato(){
        //OBTEM DA VIEW
        $nome = $_POST["nome"];
        $email= $_POST["email"];
        $mensagem= $_POST["mensagem"];
        //ignorar, pois, eh A_I
        $contato = new Contato(0,$nome,$email,$mensagem);
        $contDao = new ContatoDAO();
        //PASSA AO MODEL
        $ret = $contDao->insert($contato);
        if($ret === ""){
            header("Location: /home/sucesso");    
        }else{
            $this->view->interpolar("erro",$ret);
        }
        
    }
    
    public function CadastroNew(){
        //OBTEM DA VIEW0
        $nome = $_POST["nome"];
        $email= $_POST["email"];
        //ignorar, pois, eh A_I
        $newsletter = new Newsletter(0,$nome,$email);
        $newsDao = new NewsletterDAO();
        //PASSA AO MODEL
        $ret = $newsDao->insert($newsletter);
        if($ret === ""){
            header("Location: /home/sucesso");    
        }else{
            $this->view->interpolar("erro",$ret);
        }
        
    }

    
    public function CadastroResenha(){
        //OBTEM DA VIEW
        $nome = $_POST["nome"];
        $opiniao =$_POST["opiniao"];
        $tipo = $_POST["tipo"];
        $video = $_POST["video"];
        $autor = $_POST["autor"];
        
        //ignorar, pois, eh A_I
        $resenha = new Resenha(0,$nome,$opiniao,$tipo,$video,$autor);
        $resDao = new ResenhaDAO();
        //PASSA AO MODEL
        $ret = $resDao->insert($resenha);
        if($ret === ""){
            header("Location: /home/sucesso");    
        }else{
            $this->view->interpolar("erro",$ret);
        }
    }
        
    
    public function CadastroPosta(){
        //OBTEM DA VIEW0
        $tiulo= $_POST["tiulo"];
        $posti = $_POST["posti"];
        $data = $_POST["data"];
        $autor = $_POST["autor"];
        
        //ignorar, pois, eh A_I
        $posta = new Posta(0,$tiulo, $posti, $data, $autor);
        $posDao = new PostaDAO();
        //PASSA AO MODEL
        $ret = $posDao->insert($posta);
        if($ret === ""){
            header("Location: /home/sucesso");    
        }else{
            $this->view->interpolar("erro",$ret);
        }
        
    }
    }

?>
