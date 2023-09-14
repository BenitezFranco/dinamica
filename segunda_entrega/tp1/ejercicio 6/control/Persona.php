<?php
    class Persona{
        private $nombre;
        private $apellido;
        private $edad;
        private $direccion;
        private $estudio;
        private $sexo;
        private $deportes;
        
        function __construct($nombre, $apellido, $edad, $direccion,$estudio,$sexo, $deportes)
        {
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->edad=$edad;
            $this->direccion=$direccion;
            $this->estudio=$estudio;
            $this->sexo=$sexo;
            $this->deportes=$deportes;
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
                $res= "Hola, yo soy ".$this->getNombre()." ".$this->getApellido().", tengo ".$this->getEdad()." años, vivo en ".$this->getDireccion().", soy mayor de edad, estudios: ".$this->getEstudio().", de sexo ".$this->getSexo()." y";
            }else{
                $res= "Hola, yo soy ".$this->getNombre()." ".$this->getApellido().", tengo ".$this->getEdad()." años, vivo en ".$this->getDireccion().",  soy menor de edad, estudios: ".$this->getEstudio().", de sexo ".$this->getSexo()." y";
            }
            $deportes= $this->getDeportes();
            $val= count($deportes);
            if ($val === 0) {
                $res .= " No practica ningún deporte.";
            } else{
                $res .= " Practica " . $val ." deportes.";
            }
            return $res;
        }

        /**
         * Get the value of estudio
         */
        public function getEstudio()
        {
                return $this->estudio;
        }

        /**
         * Get the value of sexo
         */
        public function getSexo()
        {
                return $this->sexo;
        }

        /**
         * Get the value of deportes
         */
        public function getDeportes()
        {
                return $this->deportes;
        }
    }
?>