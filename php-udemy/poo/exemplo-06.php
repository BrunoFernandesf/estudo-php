<?php 

    interface Veiculo{
        public function acelerar($velocidade);
        public function freiar($velocidade);
        public function trocarMarcha($marcha);
    }

    abstract class Automovel implements Veiculo{
        public function acelerar($velocidade){
            echo "O veículo acelerou";
        }

        public function freiar($velocidade){

        }

        public function trocarMarcha($marcha){

        }
    }

    class Civic extends Automovel{
        public function empurrar(){

        }
    }

    //Irá funcionar
    $carro = new Civic();
    $carro->acelerar(200);

    //Irá retornar erro
    $novoCarro = new Automovel();
    $novoCarro->acelerar(200);
?>