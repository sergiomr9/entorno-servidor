<?php 

    class Usuario
    {
        private $nombre;
        private $apellidos;
        private $deporte;

        public function setNombre(string $nombre){
            $this->nombre = $nombre;
        }
        public function getNombre():string{
            return $this->nombre;
        }

        public function setApellidos(string $apellidos){
            $this->apellidos = $apellidos;
        }
        public function getApellidos ():string{
            return $this->apellidos;
        }

        public function setDeporte (string $deporte){
            $this->deporte = $deporte;
        }
        public function getDeporte():string{
            return $this->deporte;
        }
    }
    
?>