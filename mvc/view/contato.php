<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
<head>
 <style>
    <?php include "css/styleindex.css"; ?>
    </style>
    
  
 </head>
 
<body>

<div align="center">
<ul class="snip1189">
  <li><a href="https://trabalho-php-paiao.c9users.io/home/index">Home</a></li>
  <li><a href="https://trabalho-php-paiao.c9users.io/home/sobre">Sobre</a></li>
  <li ><a href="https://trabalho-php-paiao.c9users.io/home/noticia">Notícias</a></li>
  <li><a href="https://trabalho-php-paiao.c9users.io/home/resenha">Resenhas</a></li>
  <li class="current"><a href="#">Contato</a></li>
</ul> 
</div>   

<div id="header">
</div>    

    <div id="conteudo">
        <div id="content">
       	
			</form>
		</section>
        </div>
        
        <div id="posts">
        <div>
        <h3>Contato </h3>
          <form action="/usuario/CadastroContato" method="POST">
			<div>
				<label>Nome:</label>
				<input name="nome" type="text" id="nome" />
			</div>
			<div>
				<label >Email:</label>
				<input name="email" type="email" id="email" />
			</div>
			<div>
				<label>Mensagem:</label>
				<textarea name="mensagem" cols="40" rows="3" id="mensagem" ></textarea>
			</div>	
			<div id="result"></div>
				<input type="submit" id="submit" value="Enviar Mensagem" />
			</div>
        	</div>
        
        <div id="sidebar">
    
        </div>
    </div>
    

</body>
</html>