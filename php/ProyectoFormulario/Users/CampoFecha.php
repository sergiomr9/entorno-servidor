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
        public function printFecha()
        {
            $date = <<<EOD
            <h3 class="tit">Fecha de nacimiento <span class="requerido">*</span></h3>
            <input type="date" name="fecha" id="fecha" style="width:90%;padding:5px">
            EOD;
            /*if (validarCampos()) {
                parent::mistake($this->name);
            }*/
        }
    }

?>