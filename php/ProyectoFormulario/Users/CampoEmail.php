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
        public function printCampos()
        {
            return '
                
                <input type="email" name="'.$this->getName().'" id="mail" placeholder="'.$this->getPlaceholder().'"style="width:90%;" value="'.$this->getValue().'">
                
            ';
            //mistake($_POST["email"]);
           /* if (validarCampos()) {
                parent::mistake($this->name);
            }*/
        }
    }

?>