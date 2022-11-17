<?php 
   
    print_r($_SERVER); echo "<hr><br>";
    print_r($_GET);echo "<hr><br>";
    //$nav=$HTTP
    //function escribir($clave,$item){
        
    //}
    /*echo array_walk($_SERVER,function($clave,$item){
        if ($clave=='REMOTE_ADDR') {
            echo "La IP es: ". $item."<br>";
        }
        if ($clave=='HTTP_USER_AGENT') {
            echo "El navegador es: ".$item."<br>";
        }
        }
    );*/
    
    
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
    <form action="procesado.php" method="get">
        nombre: <input type="text" name="nombre" id="nombre"><hr>
        <input type="submit" name="enviar" value="enviar"><hr>
    </form>
    <p><?= print "IP cliente: ". $_SERVER['REMOTE_ADDR']?></p>
    <p><?= print "Navegador cliente: ". $_SERVER['HTTP_USER_AGENT']?></p><hr>
    <?php 
        $idioma = mt_rand(0,2);
        //$idioma == 0? $_SERVER['HTTP_ACCEPT_LANGUAGE']="en-US,en;q=0.5" : $_SERVER['HTTP_ACCEPT_LANGUAGE']="es-ES";
        switch ($idioma) {
            case 0:
                $_SERVER['HTTP_ACCEPT_LANGUAGE']="en-US,en;q=0.5";
                break;
            case 1:
                $_SERVER['HTTP_ACCEPT_LANGUAGE']="es-ES";
                break;
            case 2:
                $_SERVER['HTTP_ACCEPT_LANGUAGE']="zh-CN";
                break;
        }
        print_r($_SERVER['HTTP_ACCEPT_LANGUAGE']);echo "<hr>";
        if ($_SERVER['HTTP_ACCEPT_LANGUAGE']=="en-US,en;q=0.5") {
            echo "WELCOME ENGLISH";
        }elseif ($_SERVER['HTTP_ACCEPT_LANGUAGE']=="es-ES") {
            echo "BIENVENIDO ESPAÑOL";
        }elseif ($_SERVER['HTTP_ACCEPT_LANGUAGE']=="zh-CN") {
            echo "聪明人的聪明话";
        }
    ?>
</body>
</html>