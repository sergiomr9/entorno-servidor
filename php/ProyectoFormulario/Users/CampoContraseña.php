<?php 
    namespace Users;
    class CampoContraseña extends Campo
    {
    
        public function validarCampos():bool
        {
            parent::validarCampos();
            $fullRegex = $this->regex;
            if (!preg_match($fullRegex, $this->contraseña)) {
            /* parent::$errores[$this->contraseña]= */ " La contraseña tiene que tener de " . $this->minLength . " a " . $this->maxLength . " caracteres";
            }
            /*return parent::$errores[$this->contraseña];*/
            return " Introduce una contraseña";
        }

        public function printPassword()
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