<?php
    namespace Users;
    class Campo
    {
        //array de campos
        private $name;
        private $value;
        private $regex;
        private $placeholder;
        private  $errores = [];
        public function __construct($name,$value,$regex,$placeholder,)
        {
            $this->name = $name;
            $this->value = $value;
            $this->regex = $regex;
            $this->placeholder = $placeholder;
            
        }
        public function printCampos()
        {
            if ($this->validarCampos()) {
                $this->setValue($_POST[$this->name]);
                return '
            <input type="text" name="'.$this->getName().'" id="nombre" placeholder="'.$this->getPlaceholder().'" value="'.$this->getValue().'" pattern="'.$this->getRegex().'">
            ';
            
            }else{
                return '<input type="text" name="'.$this->getName().'" id="nombre" placeholder="'.$this->getPlaceholder().'" value="'.$this->getValue().'" pattern="'.$this->getRegex().'">
                 <br><div class="error">"'.$this->errores[$this->name].'"</div>
                ';
            }
            
            
            
        }
        public function validarCampos():bool {
            if (empty($_POST[$this->name])) {
                $this->errores[$this->name] =  "El campo no puede estar vacio";
                return false;
            } else {
               return $this->validar($this->name)&&preg_match($this->getRegex(),$_POST[$this->name]);
            }
            
        }

        public function validar($var): bool
        {
            return isset($_POST[$var]);

        }   
         
        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of value
         */ 
        public function getValue()
        {
                return $this->value;
        }

        /**
         * Set the value of value
         *
         * @return  self
         */ 
        public function setValue($value)
        {
                $this->value = $value;

                return $this;
        }

        /**
         * Get the value of regex
         */ 
        public function getRegex()
        {
                return $this->regex;
        }

        /**
         * Set the value of regex
         *
         * @return  self
         */ 
        public function setRegex($regex)
        {
                $this->regex = $regex;

                return $this;
        }

        /**
         * Get the value of placeholder
         */ 
        public function getPlaceholder()
        {
                return $this->placeholder;
        }

        /**
         * Set the value of placeholder
         *
         * @return  self
         */ 
        public function setPlaceholder($placeholder)
        {
                $this->placeholder = $placeholder;

                return $this;
        }

        /**
         * Get the value of errores
         */ 
        public function getErrores()
        {
                return $this->errores;
        }

        /**
         * Set the value of errores
         *
         * @return  self
         */ 
       
    }
?>
