<?php
    class CocheConRemolque extends Coche
    {
          //atributos
          private $capacidadRemolque;
          //constructor
          /*public function __construct($capacidadRemolque){ 
               $this->capacidadRemolque = $capacidadRemolque;
          }*/
          //setter & getter
          public function setCapacidadRemolque(float $capacidadRemolque){
               $this->capacidadRemolque = $capacidadRemolque;
          } 
          public function getCapacidadRemolque():float{
               return $this->capacidadRemolque;
          }


          //metodos
          public function pintarInformacion()
          {
          echo parent::pintarInformacion();
          echo " y remolque de: ".$this->capacidadRemolque;
          }

    }
    
?>