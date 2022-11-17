<?php
  //  $personas = [
     //   ["Jorge", 1],
       // ["Bea", 0],
        //["Paco", 1],
        //["Amparo", 0],
    //];
   //array_walk($personas,function($item,$clave){
    //echo(($item[1])?'señora' : 'señor');
   //})
    $pass="$2y$10$0GNiidCkeO/VBBHPH0DP6e5tgz6l/FIOxs1RcFloJrXuTYmmAsW72";
    $cadena="";
   for ($i=97; $i <123 ; $i++) { 
        for ($j=97; $j <123 ; $j++) { 
            for ($k=97; $k <123 ; $k++) { 
                for ($z=97; $z <123 ; $z++) { 
                    if (password_verify(chr($i).chr($j).chr($k).chr($z),$pass)) {
                        $cadena=chr($i).chr($j).chr($k).chr($z);
                    }
                }
            }
        }
   }
   echo $cadena;
?>

