<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
<head>
    <meta charset="UTF-8">
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


<div id="geral">
    
    <div id="conteudo">
        
        <div id="posts">
            <article>
             <?php
    foreach($dado as $post){
        echo "<div>";
        echo "<h1>";
        echo " " . $post->getData() . " |  ";
	    echo " " . $post->getTiulo() . "<br>";
	    echo "</h1>";
        echo " " . $post->getPosti() . "<br>";
        echo "<h4>";
        echo "<br>";
        echo " Por " . $post->getAutor();
        echo "        Deixe seu comentário";
        echo "<h4>";
	    echo "</div>"."<br>";
        echo"<hr></hr>";
        echo "<br>";
        }
        ?>
        
        
    <h3>Deixe seu comentario</h3>
            <form action="/usuario/CadastroComent" method="POST" >
                
                <input type="text" name="nome" placeholder="Nome"/><br>
                
                <input type="text" name="email" placeholder="Email"/><br>
    
                <textarea  name="coment"  name="comix" cols="22" rows="3" placeholder="Digite seu comentario"/></textarea><br>
                
                <input type="submit" value="Enviar"/>
                
            </form>
    </article>
       </div>
      

    <div id="sidebar">
    <article>  <h2>Assine nosso newsletter e fique por dentro de tudo relacionado ao mundo do cinema!</h2><br>
        <form action="/usuario/CadastroNew" method="POST">
            <input type="text" placeholder="Nome" name="nome"/>
            <input type="text" placeholder="E-mail" name="email"/><br><br>
            <input type="submit" value="Assinar"/>
        </form></article>
    </div>
    
</div>
</div>

 </body>
</html>