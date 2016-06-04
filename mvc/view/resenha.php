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
    
 </body>
 <footer></footer>
</html>