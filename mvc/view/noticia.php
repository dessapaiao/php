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
  <li><a href="https://trabalho-php-paiao.c9users.io/home/index">Home</a></li>
  <li><a href="https://trabalho-php-paiao.c9users.io/home/sobre">Sobre</a></li>
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
            
        <article>
        <?php
    foreach($dado as $post){
        echo "<div>";
	    echo "<h1>";
	    echo "Titulo" ."<br>" ;
	    echo "</h1>";
	    echo " " . $post->getTiulo() . "<br>";
	    echo "<h1>";
	    echo "Resenha" ."<br>" ;
	    echo "</h1>";
        echo " " . $post->getPosti() . "<br>";
        echo "<h1>";
        echo "Genero" ."<br>";
        echo "</h1>";
        echo " " . $post->getData() . "<br>";
        echo "<h1>";
        echo "Video" ."<br>";
        echo "</h1>";
        echo " " . $post->getAutor() . "<br>";
	    echo "</div>"."<br>";
        }
        ?>
    <h3>Deixe seu comentario</h3>
            <form action="/usuario/CadastroComent" method="POST" >
                
                <input type="text" name="nome" placeholder="Nome"/><br>
                
                <input type="text" name="email" placeholder="Email"/><br>
    
                <textarea  name="coment"  name="comix" cols="22" rows="3" placeholder="Digite seu comentario"/></textarea><br>
                
                <input type="submit" value="Enviar"/>
                
            </form>
    
       </div>
      </article>

    <div id="sidebar">
    <article>  <h1>Assine nosso newsletter e fique por dentro de tudo relacionado ao mundo do cinema!</h1><br>
        <form action="/usuario/CadastroNew" method="POST">
            <input type="text" placeholder="Nome" name="nome"/>
            <input type="text" placeholder="E-mail" name="email"/><br><br>
            <input type="submit" value="Assinar"/>
        </form></article>
    </div>

    
<div class="footer">
   <center>Fim do site</center> 
</div>
    
</div>


 </body>
</html>