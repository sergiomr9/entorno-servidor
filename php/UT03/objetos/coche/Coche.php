<?php 
    class Coche{

        //atributos privados
        private $matricula;
        private $marca;
        private $carga;
        //constructor
        /*public function __construct($matricula,$marca,$carga){ 
            $this->matricula = $matricula;
            $this->marca = $marca;
            $this->carga = $carga;
        }*/
        //Getter & Setter
        public function setMatricula(string $matricula){
            $this->matricula = $matricula;
        }
        public function setMarca(string $marca){
            $this->marca = $marca;
        }
        public function setCarga(string $carga){
            $this->carga = $carga;
        }

        public function getMatricula():string{
            return $this->matricula;
        }
        public function getMarca():string{
            return $this->marca;
        }
        public function getCarga():string{
            return $this->carga;
        }
        //metodos publicos
        public function pintarInformacion(){
            echo "coche: ".$this->matricula." ". "marca : ". $this->marca." "."con carga: ".$this->carga." ";
        }
    }
?>