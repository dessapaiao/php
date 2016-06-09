<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
    <head>
<style>
        <?php include "css/style2.css"; ?>
        <?php include "css/styleindex.css"; ?>
        <?php include "css/footer.css"; ?>
</style>
        <title>Login</title>
    <meta charset="UTF-8">
    </head>
    <body>
        
        <div align="center">
        <ul class="snip1189">
            <li><a href="https://trabalho-php-paiao.c9users.io/home/index">Home</a></li>
            <li><a href="https://trabalho-php-paiao.c9users.io/home/sobre">Sobre</a></li>
            <li ><a href="https://trabalho-php-paiao.c9users.io/home/noticia">Notícias</a></li>
            <li><a href="https://trabalho-php-paiao.c9users.io/home/resenha">Resenhas</a></li>
            <li ><a href="https://trabalho-php-paiao.c9users.io/home/contato">Contato</a></li>
            <li  class="current"><a href="https://trabalho-php-paiao.c9users.io/login/admin">admin</a></li>
            

        </ul> 
        </div>

    <div id="login">
    <center><img src="/mvc/css/imgs/admin.png"/></center><br>
    <form action="/login/autenticar" method="POST">
    <input type="text" required  name="login" placeholder="Login"/>
    <input type="password" required  name="senha"placeholder="Senha" />
    <input type="submit" value="OK"/>
</form>

    </div>
    
     </body>
</html>