<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
<head>
 <style>
    <?php include "css/styleindex.css"; ?>
    </style>
    
    <title>Notícias</title>

 </head>
 
<body>

<div align="center">
<ul class="snip1189">
  <li><a href="#">Home</a></li>
  <li><a href="https://trabalho-php-paiao.c9users.io/home/index">Sobre</a></li>
  <li class="current"><a href="#">Notícias</a></li>
  <li><a href="https://trabalho-php-paiao.c9users.io/home/resenha">Resenhas</a></li>
  <li><a href="https://trabalho-php-paiao.c9users.io/home/contato">Contato</a></li>
</ul> 
</div>  

<div id="header">
</div> 
<div class="geral">
    
    <div id="conteudo">
        
        <div id="posts">
            
        <article></article>
        <?php
    foreach($dado as $post){
	    echo "<div>";
	    echo "Titulo" ."<br>" ;
	    echo " " . $post->getTiulo() . "<br>";
	    echo "Resenha" ."<br>" ;
        echo " " . $post->getPosti() . "<br>";
        echo "Genero" ."<br>";
        echo " " . $post->getData() . "<br>";
        echo "Video" ."<br>";
        echo " " . $post->getAutor() . "<br>";
	    echo "</div>"."<br>";
        }
        ?>
    <h3>Deixe seu comentario</h3>
            <form action="/usuario/CadastroComent" method="POST" >
                <label for="">Nome</label>
                <input type="text" name="nome"/><br>
                <label for="">Email</label>
                <input type="text" name="email"/><br>
                <label for="">Comentario</label>
                <input type="textarea" name="coment"/>
                <input type="submit" value="cadastrar"/>
            </form>
    
       </div>
      

    <div id="sidebar">
    lalalalla
    </div>
</div>
    
<div class="footer">
   <center>Fim do site</center> 
</div>
    
</div>


 </body>
</html>