<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
<head>
    <meta charset="UTF-8">
     <style>
    <?php include "css/styleindex.css"; ?>
    <?php include "css/form.css"; ?>
    <?php include "css/footer.css"; ?>
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
  <li><a href="https://trabalho-php-paiao.c9users.io/login/admin">admin</a></li>
  
</ul> 
</div>  

<div id="header">
</div> 

<div id="posts">
	
    <?php
    foreach($dado as $post){
        echo "<div>";
        echo "<h1>";
        echo " " . $post->getData() . " |  ";
	    echo " " . $post->getTiulo() . "<br>";
	    echo "</h1>";
        echo " " . $post->getPosti() . "<br>";
        echo "<br>";
        echo "<h4>";
        echo " Por " . $post->getAutor();
        echo "</h4>";
	    echo "</div>"."<br>";
        echo "<br>";
        }
        ?>
        
     <br>  
    <h3>Deixe seu comentário</h3><br>
            <form action="/usuario/CadastroComent" method="POST" >
                
                <input type="text" size="30px" name="nome" placeholder="Nome"/><br>
                
                <input type="text" size="30px" name="email" placeholder="Email"/><br>
    
                <textarea type="text" name="coment" cols="40" rows="8" placeholder="Digite seu comentario"/></textarea><br>
                
                <input type="submit" value="Enviar"/>
                
            </form>

</div>




