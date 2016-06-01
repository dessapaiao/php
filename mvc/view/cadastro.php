<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro</title>
        <ul>
			<li><a href="#">Home</a></li>

			<li><a href="#">Pesquisar </a></li>

			<li><a href="#">Contato</a></li>

			<li><a href="#">Login e Cadastro</a></li>
		</ul>
        
    </head>
    <body>
    <h1>Cadastro</h1>
    <form action="/usuario/inserir" method="POST">
        Nome: <input type="text" name="nome" required /> <br>
        Email: <input type="text" name="email"  required pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" /> <br>
        Login: <input type="text" name="login" required/> <br>
        Senha: <input type="password" name="senha" required />
        
    <input type="submit" value="cadastrar" value="cadastrar"/>
    

    </body>
    
</html>