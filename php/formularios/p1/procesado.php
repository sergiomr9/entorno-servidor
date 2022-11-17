<?php 
       /*echo isset($_GET['nombre'])? "RECIBIENDO FORMULARIO" : "<a href='p1.php'>enlace al formulario     </a>";*/
       if (!empty($_GET['nombre'])) {
        echo "RECIBIENDO FORMULARIO" ;
       }
       if (empty($_GET['nombre'])) {
        echo "<a href='p1.php'>enlace al formulario</a>";
       }
       
?>