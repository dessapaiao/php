<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
    <head>
<style>
        <?php include "css/style2.css"; ?>

</style>
        <title>Login</title>
        
    </head>
    <body>

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