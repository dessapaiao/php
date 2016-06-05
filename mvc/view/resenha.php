<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
<head>
  <link rel="stylesheet" href="/css/stylei.css">
 </head>
 
<body>
    
<div id="header">
</div>    
    <menu>
        <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Notícias</a></li>
        <li><a href="#">Resenhas</a></li>
        <li><a href="">Contato</a></li>
        </ul>
    </menu>
    
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
    
 </body>
 <footer></footer>
</html>