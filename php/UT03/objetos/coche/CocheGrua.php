<?php 
    class CocheGrua extends Coche{

        //atributos
        private $cocheCargado;
        //constructor
        /*public function __construct($cocheCargado){ 
            $this->cocheCargado = $cocheCargado;

        }*/
        //setter & getter
        public function setCocheCargado(Coche $cocheCargado){
            $this->cocheCargado = $cocheCargado;
        }
        public function getCocheCargado():Coche{
            return $this->cocheCargado;
        }

        //***metodos***
        public function cargarCoche(Coche $coche){
            $this->cocheCargado = $coche;
        }
        public function descargarCoche(){
            $this->cocheCargado = null;
        }
        public function pintarInformacion()
        {
            parent::pintarInformacion();
            if (is_null($this->cocheCargado)) {
                echo "No lleva ningún coche";
            }else{
                echo " lleva coche: ".$this->cocheCargado->pintarInformacion();
            }
        }
    }
?>