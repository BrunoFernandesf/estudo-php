<?php 

    class Carro{

        private $marca;
        private $modelo;
        private $ano;

        public function getMarca(){
            return $this->marca;
        }
        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function getAno():int{
            return $this->ano;
        }
        public function setAno($ano){
            $this->ano = $ano;
        }

        public function getDescricao(){
            return array(
                "marca"=>$this->getMarca(),
                "modelo"=>$this->getModelo(),
                "ano"=>$this->getAno()
            );
        }

    }

    $meuCarro = new Carro();
    $meuCarro->setMarca("Chevrolet");
    $meuCarro->setModelo("Camaro");
    $meuCarro->setAno(2015);

    echo print_r($meuCarro->getDescricao());
?>