<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
<head>
    <style>
    <?php include "css/styleindex.css"; ?>
    <?php include "css/form.css"; ?>
    <?php include "css/footer.css"; ?>
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
  <li><a href="https://trabalho-php-paiao.c9users.io/login/admin">admin</a></li>
</ul> 
</div>   

<div id="header">
</div>    

   <div class="geral">
    <div id="conteudo">
        <div id="posts">
    
    <article>
        
        <h3>Contato </h3><br>
          <form action="/usuario/CadastroContato" method="POST">
			
				
				<input name="nome" type="text" id="nome" size="50" placeholder="Nome"/><br>
			
			    <input name="email" type="email" id="email" size="50" placeholder="Email" /><br>
			
				<textarea name="mensagem" cols="60" rows="10" id="mensagem" placeholder="Digite aqui sua mensagem"></textarea> <br>
			
				<input type="submit" id="submit" value="Enviar Mensagem" />
			
			</div>
			</article>
        	</div>
               </div>
     

</body>
</html>