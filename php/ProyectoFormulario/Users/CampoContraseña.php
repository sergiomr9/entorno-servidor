<?php 
    namespace Users;
    class CampoContraseña extends Campo
    {
    
        public function validarCampos():bool
        {
            parent::validarCampos();
            
            
            /*return parent::$errores[$this->contraseña];*/
            return " Introduce una contraseña";
        }

        public function printCampos()
        {
            if ($this->validarCampos()) {
                $this->setValue($_POST[$this->name]);
            }
            return  '
            <input type="password" name="'.$this->getName().'" id="pass"placeholder="'.$this->getPlaceholder().'"><br>';
           /* if (validarCampos()) {
                parent::mistake($this->name);
            }*/
        
            //mistake($_POST["pass"]);
        }
    }

?>