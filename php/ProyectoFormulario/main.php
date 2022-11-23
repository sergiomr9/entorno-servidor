<?php

    use Users\Campo;
use Users\User;

    spl_autoload_register(function ($class) {//Autoload
        $classPath = "./";
        $file = str_replace('\\', '/', $class);
        require("$classPath${file}.php");
    });   
    $config = Users\GestorUsuarios::singleton();
    $form = new User($_POST);
    if ($form->isValid()) {
        $form->guardarUsuario();
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
    <?php $form->print()/*pinta el formulario*/?>
</body>
</html>