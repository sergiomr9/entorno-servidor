<?php 

    namespace Users;
    class CampoEmail extends Campo
    {
        public function validarCampos(): bool
        {
            parent::validarCampos();
            if (!preg_match($this->regex,$this->name)) {
               // parent::$errores[$this->name;] = "El email no es válido";
            }
            return true;
        }
        public function printEmail()
        {
            return '
                <h3 class="tit">Direccion mail <span class="requerido">*</span></h3>
                <input type="email" name="'.$this->getName().'" id="mail" placeholder="'.$this->getPlaceholder().'" style="width: 90%;" value="'.$this->getValue().'">
                <p class="recmail">Les recomendamos no utilizar los siguientes proveedores de correos: T-Online, Hotmail, live, Msn y Outlook dado que hay problemas a la hora de recibir nuestros emails en estos correos.</p>
            ';
            //mistake($_POST["email"]);
           /* if (validarCampos()) {
                parent::mistake($this->name);
            }*/
        }
    }

?>