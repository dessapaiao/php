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
    
   <title>Resenhas</title>
 
 </head>
 
<body>

<div align="center">
<ul class="snip1189">
  <li><a href="https://trabalho-php-paiao.c9users.io/home/index">Home</a></li>
  <li><a href="https://trabalho-php-paiao.c9users.io/home/sobre">Sobre</a></li>
  <li><a href="https://trabalho-php-paiao.c9users.io/home/noticia">Notícias</a></li>
  <li class="current"><a href="#">Resenhas</a></li>
  <li><a href="https://trabalho-php-paiao.c9users.io/home/contato">Contato</a></li>
  <li><a href="https://trabalho-php-paiao.c9users.io/login/admin">admin</a></li>
</ul> 
</div>   

<div id="header">
</div>    

   <div class="geral">
    <div id="conteudo">
        <div id="posts">
        <article>
        <?php
    foreach($dado as $resenha){
	    echo "<div>";
        echo "<h1>";
	    echo " " . $resenha->getNome() . "<br>";
		echo "</h1>";
		echo " " . $resenha->getOpiniao() . "<br>";
		echo "<b>";
        echo "Gênero" ."<br>";
        echo "</b>";
        echo " " . $resenha->getTipo() . "<br>";
        echo "<b>";
        echo "Video" ."<br>";
        echo "</b>";
        echo " " . $resenha->getVideo() . "<br>";
        echo "<b>";
        echo "Autor" ."<br>";
		echo "</b>";
	    echo " " . $resenha->getAutor() . " ";
	    echo "</div>"."<br>";
        }
        ?>
        </article>
        
        <div>
        <h3>Deixe seu comentario</h3>
            <form action="/usuario/cadastroComentario" method="POST" >
                
                <input type="text" size="30px" name="nome" placeholder="Nome"/><br>
                
                <input type="text" size="30px" name="email" placeholder="E-mail"/><br>
                
                <input type="textarea" size="30px" name="comix" cols="40" rows="8" placeholder="Digite seu comentario"/>
                
                <input type="submit" value="Enviar"/>
            </form>
        
        </div>
        </div>
   
    
    </div>
   

</div>

    
 </body>
</html>