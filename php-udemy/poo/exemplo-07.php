<?php 

    abstract class Animal{

        public function comunicar(){
            return "Som";
        }

        public function mover(){
            return "Anda";
        }
    }

    class Cachorro extends Animal {

        public function comunicar(){

            return "Late" . parent::comunicar();
        }
    }

    $pitty = new Cachorro();

    echo $pluto->comunicar();
    echo "<br>";
    echo $pluto->mover();

?>