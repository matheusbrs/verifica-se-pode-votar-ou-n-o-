<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./php.css">
    <title>Document</title>

</head>
<body >

<div id="fundo">

<div id="conteudo">
<?php
    $nome = isset($_GET["nome"]) ?$_GET["nome"]:"não cadastrado";
    $idade = isset($_GET["idade"])?$_GET["idade"]:"não cadastrado";
    $permisao = null ;
   
        echo "Nome : $nome <br> Idade : $idade <br> <br>";

        if($idade >= 18 )
         
        {
            
            $permisao = "--------------- pode votar ! --------------<br>";
        } 
        else if($idade == null && $nome == null){

            echo"----------Dados não recebidos----------";

        }
        else{
           $permisao ="--você não tem idade suficiente para votar !-- <br>";
          
        }
    
    echo " $permisao <br>";
    ?>
</div>
<div id="vlt">
    <a href="./index.html"> voltar</a>
</div>

    </div>





</body>
</html>