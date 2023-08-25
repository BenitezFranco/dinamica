<?php
    class Persona{
        private $nombre;
        private $apellido;
        private $edad;
        private $direccion;
        
        function __construct($nombre, $apellido, $edad, $direccion)
        {
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->edad=$edad;
            $this->direccion=$direccion;
        }
       

        /**
         * Get the value of nombre
         */
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Get the value of apellido
         */
        public function getApellido()
        {
                return $this->apellido;
        }

        /**
         * Get the value of edad
         */
        public function getEdad()
        {
                return $this->edad;
        }

        /**
         * Get the value of direccion
         */
        public function getDireccion()
        {
                return $this->direccion;
        }

        function saludo(){
            if ($this->getEdad() >= 18) {
                $res= "Hola, yo soy ".$this->getNombre()." ".$this->getApellido().", tengo ".$this->getEdad()." años, vivo en ".$this->getDireccion()." y soy mayor de edad.";
            }else{
                $res= "Hola, yo soy ".$this->getNombre()." ".$this->getApellido().", tengo ".$this->getEdad()." años, vivo en ".$this->getDireccion()." y soy menor de edad.";
            }
            return $res;
        }
    }
?>