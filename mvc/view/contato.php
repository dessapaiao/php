<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
    	<ul>
			<li><a href="#">Home</a></li>

			<li><a href="#">Pesquisar </a></li>

			<li><a href="#">Contato</a></li>

			<li><a href="#">Login e Cadastro</a></li>
		</ul>
		
        <h3 class="headline">Formulário de Contato</h3>
        
			<form action="/usuario/inserirContato" method="POST">
				<fieldset>
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

				</fieldset>
				<div id="result"></div>
				<input type="submit" id="submit" value="Enviar Mensagem" />
			</form>
		</section>
    </body>
</html>