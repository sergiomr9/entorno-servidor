<?php 

    namespace Users;
      class User extends \Users\GestorUsuarios 
    {
        //ATRIBUTOS


        private static $errores = [];
        private array $campos;

        //CONSTRUCTOR
        public function __construct()
        {
            $this->campos ["nombre"] = new Campo('nombre',"","","INTRODUCE TU NOMBRE");
            $this->campos ["apellidos"] = new Campo('apellidos',"","","INTRODUCE TUS APELLIDOS");
            $this->campos ["sexo"] = new CampoRadio("sexo","","","");
            //$this->campos ["fecha"] = new CampoFecha('fecha');
            $this->campos ["calle"] = new Campo("calle","","","CALLE");
            $this->campos ["piso"] = new Campo("piso","",GestorUsuarios::REGEXPISO,"PISO");           
            $this->campos ["cp"] = new Campo('cp',"",GestorUsuarios::REGEXCP,"CODIGO POSTAL");       
            $this->campos ["ciudad"] = new Campo('ciudad',"","","CIUDAD");         
            $this->campos ["pais"] = new campo("pais","","","PAIS");          
            $this->campos ["email"] = new Campo('email',"",GestorUsuarios::REGEXMAIL,"INTRODUCE TU EMAIL");          
            $this->campos ["user"] = new Campo('user',"","","INTRODUCE TU USUARIO");         
            $this->campos ["pass"] = new CampoContraseña("pass","",GestorUsuarios::REGEXPASS,"INTRODUCE TU CONTRASEÑA" );
            $this->campos ["repass"] = new CampoContraseña("pass","",GestorUsuarios::REGEXPASS,"LAS CONTRASEÑAS TIENEN QUE COINCIDIR" );

        }
        public function getCampos()
        {
            return $this->campos;
        }
        //METODOS

    
        public function isValid() {
            //return count(Input::getErrores()) == 0;
        }
        public function guardarUsuario()
        {
            file_put_contents(
                "./list.csv",
                $this->campos["nombre"]->getNombre().",".
                $this->campos["apellidos"]->getNombre().",".
                $this->campos["sexo"]->getNombre().",".
                $this->campos["fecha"]->getNombre().",".
                $this->campos["calle"]->getNombre().",".
                $this->campos["piso"]->getNombre().",".
                $this->campos["cp"]->getNombre().",".
                $this->campos["ciudad"]->getNombre().",".
                $this->campos["pais"]->getNombre().",".
                $this->campos["email"]->getNombre().",".
                $this->campos["user"]->getNombre().",".
                $this->campos["pass"]->getNombre().","."\n",
                FILE_APPEND
            );
        }
       
        public function print()
        {
            
              echo'  <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
                    <link rel="stylesheet" href="styles.css">
                </head>
                <body>
                    <div class="cuerpo">
                        <div class="titulo">
                            <h1 class="tit">Registrarse</h1>
                            <p>Crea tu cuenta de usuario</p>
                        </div>
                        <hr class="tit">
                        <form action="" method="post">
                            <div class="humano">';
                                $this->campos["nombre"]->printCampos();
                               
                                $this->campos["apellidos"]->printCampos();
                     echo  '</div>';
                                $this->sexo->printSex();
                                $this->fecha->printFecha();
                    echo   '<div class="direccion">';
                                $this->campos["calle"]->printCampos();
                                $this->campos["piso"]->printCampos();
                                $this->campos["cp"]->printCampos();
                                $this->campos["ciudad"]->printCampos();
                                $this->campos["pais"]->printCampos();
                    echo    '</div>';
                                $this->campos["email"]->printCampos();
                    echo    '<div class="userpass">';
                                $this->campos["user"]->printCampos();
                                $this->campos["pass"]->printCampos();
                                $this->campos["repass"]->printCampos();
                    echo    '</div>';
                    echo    
                            '<input type="submit" value="Registrarse" class="enviar" name="enviar">
                    </form>
                    </div>
                </body>
                </html>';
            
        }
    }
    

?>