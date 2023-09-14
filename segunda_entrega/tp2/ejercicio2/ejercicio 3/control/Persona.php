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
            return "Hola, yo soy ".$this->getNombre()." ".$this->getApellido().", tengo ".$this->getEdad()." años y vivo en ".$this->getDireccion().".";
        }
    }
?>