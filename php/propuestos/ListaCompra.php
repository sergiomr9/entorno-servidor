<?php
$productos = [
    "naranja" => 1.2,
    "manzana" => 1.5,
    "pera" => 1.8,
    "platano" => 0.8,
    "kiwi" => 0.75,
    "macarrones" => 0.5,
    "arroz" => 0.75,
    "salchichas" => 1,
    "patatas_fritas" => 3,
    "paninis" => 1.5,
    "leche_6_uds" => 5,
    "pizza_jamon_serrano" => 2.59,
    "helado_chocolate" => 2.99
];



function Imprimir(){
    global $productos;
    array_walk($productos,function($item,$key){
        echo"<tr> <td>$key</td> <td>$item</td> <td><input type='number' name='$key'> </td> </tr>"; 
    });
    
}
//function Calcular($key){
    //global $productos;
    //function mult($key){
       // return ($_GET["$key"] * $key);
   // }
   // $b = array_map('mult',$productos);
       // echo "Factura total: ". array_sum($b);
   
//}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>$
    <form action="ListaCompra.php" method="get">
        <table>
            <?php
              Imprimir();
            ?>
        </table>
       <input type='submit' name='enviar' method='get' value='enviar'>
       
    </form>
    <?php
        if(isset($_GET['enviar'])) {
            array_walk($productos,function($item,$key){
                if($_GET["$key"]!=null){
                    echo "PRECIO DE ".$key.": ". ($item * $_GET["$key"])."<br>";
                  //  $b = $item * $_GET["$key"];
                    //$t+=$b;
                }
            });
            //echo "FACTURA TOTAL: ". ($item * $_GET["$key"]);
        }
    ?>
</body>
</html>