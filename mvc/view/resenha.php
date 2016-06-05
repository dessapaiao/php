<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
<head>
 <style>
    <?php include "css/styleindex.css"; ?>
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
</ul> 
</div>   

<div id="header">
</div>    

    <div id="conteudo">
        <div id="content">
        <?php
    foreach($dado as $resenha){
	    echo "<div>";
	    echo "Titulo" ."<br>" ;
	    echo " " . $resenha->getNome() . "<br>";
	    echo "Resenha" ."<br>" ;
        echo " " . $resenha->getOpiniao() . "<br>";
        echo "Genero" ."<br>";
        echo " " . $resenha->getTipo() . "<br>";
        echo "Video" ."<br>";
        echo " " . $resenha->getVideo() . "<br>";
        echo "Autor" ."<br>";
	    echo " " . $resenha->getAutor() . " ";
	    echo "</div>"."<br>";
        }
        ?>
        </div>
        
        <div id="posts">
        <div>
        <h3>Deixe seu comentario</h3>
            <form action="/usuario/cadastroComentario" method="POST" >
                <label for="">Nome</label>
                <input type="text" name="nome"/><br>
                <label for="">Email</label>
                <input type="text" name="email"/><br>
                <label for="">Comentario</label>
                <input type="textarea" name="comix"/>
                <input type="submit" value="cadastrar"/>
            </form>
        
        </div>
        </div>
        
        <div id="sidebar">
    
    </div>
    
    </div>
    

    

 </body>
</html>