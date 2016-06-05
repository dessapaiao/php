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
    foreach($dado as $comentario){
	    echo "<div>";
	    echo "Nome" ."<br>" ;
	    echo " " . $comentario->getNome() . "<br>";
	    echo "Email" ."<br>" ;
        echo " " . $comentario->getEmail() . "<br>";
        echo "Comentario" ."<br>" ;
        echo " " . $comentario->getComix() . "<br>";
	    echo "</div>"."<br>";
                    	
            }
        ?>

    </div>
    
    
 </body>
 <footer></footer>
</html>