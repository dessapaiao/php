<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
    <?php include "css/styleindex.css"; ?>
     <?php include "css/footer.css"; ?>
    </style>
  
 </head>
 
<body>

<div align="center">
<ul class="snip1189">
  <li class="current"><a href="#">Home</a></li>
  <li><a href="https://trabalho-php-paiao.c9users.io/home/sobre">Sobre</a></li>
  <li><a href="https://trabalho-php-paiao.c9users.io/home/noticia">Notícias</a></li>
  <li><a href="https://trabalho-php-paiao.c9users.io/home/resenha">Resenhas</a></li>
  <li><a href="https://trabalho-php-paiao.c9users.io/home/contato">Contato</a></li>
  <li><a href="https://trabalho-php-paiao.c9users.io/login/admin">admin</a></li>
</ul> 
</div>
 
 
 <?php
    foreach($dado as $post){
        echo "<div>";
        echo "<h1>";
        echo " " . $post->getData() . " |  ";
	    echo " " . $post->getTiulo() . "<br>";
	    echo "</h1>";
        echo "<h4>";
        echo "<br>";
        echo " Por " . $post->getAutor();
        echo "        Deixe seu comentário";
        echo "<h4>";
	    echo "</div>"."<br>";
        echo "<br>";
        }
    ?>