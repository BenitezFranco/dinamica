<?php 
    class Operacion{
        private $operacion;
        private $numP;
        private $numD;
        private $resultado;
        function __construct($operacion, $numP, $numD)
        {
            $this->operacion= $operacion;
            $this->numP= $numP;
            $this->numD= $numD;
        }

        public function getOperacion()
        {
                return $this->operacion;
        }

        public function getNumP()
        {
                return $this->numP;
        }

        public function getNumD()
        {
                return $this->numD;
        }
        public function getResultado()
        {
                return $this->resultado;
        }
        public function calcular(){
            $operacion= $this->getOperacion();
            $numero1= $this->getNumP();
            $numero2= $this->getNumD();
            switch ($operacion) {
                case "suma":
                    $resultado = $numero1 + $numero2;
                    break;
                case "resta":
                    $resultado = $numero1 - $numero2;
                    break;
                case "multiplicacion":
                    $resultado = $numero1 * $numero2;
                    break;
            }
            $this->resultado= $resultado;
        }
    }
?>