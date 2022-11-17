<?php
    function generarArray(int $valores=10,int $maximo =10, int $minimo=0){
        $array = [];
        for ($i=0; $i < $valores; $i++) { 
            $array[$i] = mt_rand($minimo, $maximo);
        }
        print_r($array);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ut03_10.php" method="get">
        <input type = "number" name="valores">:Numero de valores<br>
        <input type = "number" name="maximo">:Valor máximo<br>
        <input type = "number" name="minimo">:Valor mínimo<br>
        <input type="submit" name="enviar" value="Generar array">
    </form>
   <?php 
       
       //generarArray();
       print_r($_GET);
       if (isset($_GET['enviar'])) {
           if (isset($_GET['valores']) && $_GET['maximo'] && $_GET['minimo']) {
                generarArray($_GET['valores'],$_GET['maximo'],$_GET['minimo']);
           }elseif (isset($_GET['valores']) && $_GET['maximo']) {
                generarArray($_GET['valores'],$_GET['maximo']);
           }elseif (isset($_GET['valores']) && $_GET['valores'] != "") {
                generarArray($_GET['valores']);
           }else{
                generarArray();
           }
       }
   ?>
</body>
</html>