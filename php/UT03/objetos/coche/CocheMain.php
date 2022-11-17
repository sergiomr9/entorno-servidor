<?php 
    require("Coche.php");
    require("CocheGrua.php");
    require("CocheConRemolque.php");

    //Cree un array vacío.
    $copaPiston = [];
    //Cree un coche con matrícula 1000, marca BMV, carga 30
    $rayoMcQueen = new Coche();
    $rayoMcQueen->setMatricula("1000");$rayoMcQueen->setMarca("BMW");$rayoMcQueen->setCarga("30");
    //Cree un coche con remolque y matrícula 1001, marca Renault, carga 30 y carga remolque 200
    $docHudson = new CocheConRemolque();
    $docHudson->setMatricula("1001");
    $docHudson->setMarca("Renault");
    $docHudson->setCarga("30");
    $docHudson->setCapacidadRemolque(200);
    //Cree un coche con matrícula 1002, marca Porche, carga 40
    $sallyCarrera = new Coche();
    $sallyCarrera->setMatricula("1002");$sallyCarrera->setMarca("Porche");$sallyCarrera->setCarga("40");
    //Cree un coche-grúa con matrícula 1003, marca Renault, carga 20
    $towMater = new CocheGrua("1003", "Reanault", "20");
    $towMater->setMatricula("1003");
    $towMater->setMarca("Renault");
    $towMater->setCarga("20");
    //Carga el porche en el coche-grúa
    $towMater->cargarCoche($sallyCarrera);
    /*Mete en el array:
        BMV
        Renault de matrícula 1001
        Y el coche grúa.
        OJO! No metas el Porche, ya va en la grúa
    */
    $copaPiston[0] = $rayoMcQueen;
    $copaPiston[1] = $docHudson;
    $copaPiston[2] = $towMater;
    //Utiliza array_walk para pintar en un div cada uno de los vehículos

    function brumBrum($copaPiston){
        array_walk($copaPiston, function($item){
            echo "<div class='".$item->getMatricula()."'>". $item->pintarInformacion(). "</div>";
        });
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
    <?php brumBrum($copaPiston) ?>
</body>
</html>