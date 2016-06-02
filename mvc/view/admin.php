<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="/css/style2.css">

        <title>Área do Administrador</title>
        
    </head>
    <body>
        <h3>Bem Vindo, <?= $dado["nome"] ?></h3>
    
    <header>
      <h1 class="float-l">
        <a href="#" title="Titulo do Site">SEM NOME</a>
      </h1>
      
      <input type="checkbox" id="control-nav" />
      <label for="control-nav" class="control-nav"></label>
      <label for="control-nav" class="control-nav-close"></label>

      <nav class="float-r">
        <ul class="list-auto">
          <li>
            <a href="#0" title="Home"> Noticia</a>
          </li>
          <li>
            <a href="#1" title="Item 1"> Resenha</a>
          </li>
          <li>
            <a href="#2" title="Item 2"></a>
          </li>
          <li>
            <a href="#3" title="Item 3">Item 3</a>
          </li>
        </ul>
      </nav>
</header>
               
        
    <div class="formulario">
    <form>
        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus=""><br>
        <input class="form-control" placeholder="Password" name="password" type="password" value="">
        <div class="checkbox">
			<label>
				<input name="remember" type="checkbox" value="Remember Me">Remember Me
			</label>
		</div>
		<button type="submit">Entrar</button>
		
    </form>
     </div>
    
     </body>
</html>