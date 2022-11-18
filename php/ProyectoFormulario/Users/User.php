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
            $this->campos ["nombre"] = new Campo('nombre',"",GestorUsuarios::REGEXNOMBRE,"INTRODUCE TU NOMBRE");
            $this->campos ["apellidos"] = new Campo('apellidos',"",GestorUsuarios::REGEXAPELLIDO,"INTRODUCE TUS APELLIDOS");
            $this->campos ["sexo"] = new CampoRadio("sexo","","","");
            //$this->campos ["fecha"] = new CampoFecha('fecha');
            $this->campos ["calle"] = new Campo("calle","",GestorUsuarios::REGEXAPELLIDO,"CALLE");
            $this->campos ["piso"] = new Campo("piso","",GestorUsuarios::REGEXPISO,"PISO");           
            $this->campos ["cp"] = new Campo('cp',"",GestorUsuarios::REGEXCP,"CODIGO POSTAL");       
            $this->campos ["ciudad"] = new Campo('ciudad',"",GestorUsuarios::REGEXAPELLIDO,"CIUDAD");         
            $this->campos ["pais"] = new campo("pais","",GestorUsuarios::REGEXAPELLIDO,"PAIS");          
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
                                echo $this->campos["nombre"]->printCampos();
                               
                               echo $this->campos["apellidos"]->printCampos();
                     echo  '</div>';
                                echo $this->sexo->printSex();
                                echo $this->fecha->printFecha();
                    echo   '<div class="direccion">';
                                echo $this->campos["calle"]->printCampos();
                                echo $this->campos["piso"]->printCampos();
                                echo $this->campos["cp"]->printCampos();
                                echo $this->campos["ciudad"]->printCampos();
                                echo $this->campos["pais"]->printCampos();
                    echo    '</div>';
                               echo $this->campos["email"]->printCampos();
                    echo    '<div class="userpass">';
                                echo $this->campos["user"]->printCampos();
                                echo $this->campos["pass"]->printCampos();
                                echo $this->campos["repass"]->printCampos();
                    echo    '</div>';
                    echo    
                            '<h3 class="tit">Politicas legales <span class="requerido">*</span></h3>
                            <input type="checkbox" name="check1" id="check1">
                            <label for="check1" class="recmail">Por la presente declaro estar de acuerdo con las Condiciones legales. Declaro haber leído las Condiciones de Revocación.</label><br>
                            
                            <input type="checkbox" name="check2" id="check2">
                            <label for="check2" class="recmail">Declaro haber leido la Política de privacidad y estoy de acuerdo con el almacenamiento de mis datos. Se que puedo revocar mi consentimiento en cualquier momento.</label><br>
                            
                            <input type="checkbox" name="check3" id="check3">
                            <label for="check3" class="recmail">Declaro estar de acuerdo y solicito expresamente que comience la provisión de los servicios solicitados por mí antes de que expire el período de revocación. Soy consciente de que perderé mi derecho de revocación en caso de un cumplimiento completo del contrato por ustedes.</label><br>
                            <input type="submit" value="Registrarse" class="enviar" name="enviar">
                    </form>
                    </div>
                </body>
                </html>';
            
        }
    }
    

?>