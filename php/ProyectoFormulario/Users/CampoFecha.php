<?php 

    namespace Users;
    

    class CampoFecha extends Campo{
        public function validarCampos():bool
        {
            if (parent::validarCampos()) {
                return true;
            }
            else {
                return false;
            }
        }
        public function printCampos()
        {
            return '
            
            <input type="date" name="fecha" id="fecha" style="width:90%;padding:5px">
            ';
            /*if (validarCampos()) {
                parent::mistake($this->name);
            }*/
        }
    }

?>