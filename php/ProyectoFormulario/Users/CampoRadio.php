<?php

    namespace Users;

    class CampoRadio extends Campo{

        public function validarCampos(): bool
        {
            if (parent::validarCampos()) {
                return true;
            }else{
                return false;
            }
        }
        public function printCampos():string{
        
            return '
            
            <label for="H">Hombre</label>
            <input type="radio" name="'.$this->getName().'" id="H">
            <label for="M">Mujer</label>
            <input type="radio" name="'.$this->getName().'" id="M">
            <label for="O">Otro</label>
            <input type="radio" name="'.$this->getName().'" id="O">
            
            ';
           /* if (validarCampos()) {
                parent::mistake($this->name);
            }*/
        }
    }

?>