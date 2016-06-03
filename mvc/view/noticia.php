<h1>noticia</h1>

<form action="/usuario/inserirNoticia" method="POST" enctype=”multipart/form-data”>
    <label for="">Titulo</label>
    <input type="text" name="titulo"/><br>
    
    <h4>Envie uma foto</h4>

	<input type="file" name="foto" id="foto" accept="image/*"/><br>
    <label for="">Noticia</label>
    <input type="textarea" name="noticia"/><br>
    <label for="">Autor</label>
    <input type="text" name="autor"/>
    <input type="submit" value="enviar"/>
</form>