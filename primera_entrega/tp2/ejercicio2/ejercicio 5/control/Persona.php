<?php
    class Persona{
        private $nombre;
        private $apellido;
        private $edad;
        private $direccion;
        private $estudio;
        private $sexo;
        
        function __construct($nombre, $apellido, $edad, $direccion,$estudio,$sexo)
        {
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->edad=$edad;
            $this->direccion=$direccion;
            $this->estudio=$estudio;
            $this->sexo=$sexo;
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
                $res= "Hola, yo soy ".$this->getNombre()." ".$this->getApellido().", tengo ".$this->getEdad()." años, vivo en ".$this->getDireccion().", soy mayor de edad, estudios: ".$this->getEstudio()." y de sexo ".$this->getSexo().".";
            }else{
                $res= "Hola, yo soy ".$this->getNombre()." ".$this->getApellido().", tengo ".$this->getEdad()." años, vivo en ".$this->getDireccion().",  soy menor de edad, estudios: ".$this->getEstudio()." y de sexo ".$this->getSexo().".";
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
    }
?>