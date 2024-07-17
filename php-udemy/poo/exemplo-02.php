<?php 

    class Carro{

        private $modelo;
        private $motor;
        private $ano;

        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function getMotor(){
            return $this->motor;
        }
        public function setMotor($motor){
            $this->motor = $motor;
        }

        public function getAno():int{
            return $this->ano;
        }
        public function setAno($ano){
            $this->ano = $ano;
        }

        public function exibir(){

            return array(
                "modelo"=>$this->getModelo(),
                "motor"=>$this->getMotor(),
                "ano"=>$this->getAno()
            );
        }
    }

    $meuCarro = new Carro();
    $meuCarro->setModelo("Corsa");
    $meuCarro->setMotor("2.0");
    $meuCarro->setAno(2000);

    echo print_r($meuCarro->exibir());

    echo "<br>";

    echo $meuCarro->getModelo();

?>