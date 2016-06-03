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
            header("Location: /home/sucesso");    
        }else{
            $this->view->interpolar("errosql",$ret);
        }
        
    }
    public function inserirContato(){
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
    
    public function inserirNews(){
        //OBTEM DA VIEW
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
    
    public function inserirNoticia(){
        // ENVIA A FOTO PARA O SERVIDOR
        $titulo = $_POST["titulo"];
        $noticia = $_POST["noticia"];
        $foto = $_FILES["foto"];
		//verificando se é mesmo uma imagem
		if (!strstr("/^image/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])) {
			$erro[1] = "Isso nao eh uma imagem.";
		}
		//strtolower(Mayara) ele vai deixar strtolower(mayara)
		//substr — Retorna uma parte de uma string
		$ext      = strtolower(substr($foto['name'], -4)); //Pegando extensão do arquivo
		$fotonome = date("Y.m.d-H-i-s") . $ext; //Definindo um novo nome para o arquivo

		// Caminho de onde ficara a imagem
		$caminho = "/mvc";

		// Faz o upload da imagem para seu respectivo caminho
		move_uploaded_file($foto["tmp_name"], $caminho . $foton);

		// CADASTRAR RECEITA NO BD
        $autor = $_POST["autor"];
        //ignorar, pois, eh A_I
        $noticia = new Noticia(0,$titulo,$foto,$noticia,$autor);
        $notDao = new NoticiaDAO();
        //PASSA AO MODEL
        $ret = $notDao->insert($noticia);
        if($ret === ""){
            header("Location: /home/sucesso");    
        }else{
            $this->view->interpolar("erro",$ret);
        }
        
    }
    
}

?>