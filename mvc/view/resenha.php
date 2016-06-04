<!DOCTYPE html>
<html>
    <body>     
    <table class="basic-table">
	<thead>
		<tr>
			<td>filme</td>
			<td>opiniao</td>
			<td>tipo</td>
			<td>video</td>
			<td>autor</td>
			
		</tr>
	</thead>
	<tbody>
   
    <?php 
    foreach($dado as $resenha){
	    echo "<tr>";
	    echo "<td>" . $resenha->getNome() . "</td>";
        echo "<td>" . $resenha->getOpiniao() . "</td>";
        echo "<td>" . $resenha->getTipo() . "</td>";
        echo "<td>" . $resenha->getVideo() . "</td>";
	    echo "<td>" . $resenha->getAutor() . "</td>";
                    	
            }
        ?>
    	</tbody>
</table>
</html>