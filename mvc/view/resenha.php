<!DOCTYPE html>
<html>
    <head>
        <title>resenha</title>
        
    </head>
    <body>     
     <?php
        foreach($dado as $resenha){
            echo "<div>" . $resenha->getNome() . "</div>";
         }
        ?>
    </body>
      
</html>