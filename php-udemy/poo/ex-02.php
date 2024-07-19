<?php 

//Crie a classe ContaBancaria.
//Adicione as propriedades titular e saldo.
//Crie um método construtor para inicializar as propriedades.
//Implemente os métodos depositar(), sacar(), getSaldo() e getTitular().
//Crie uma instância da classe ContaBancaria e teste os métodos.

    class ContaBancaria{
        private $titular;
        private $saldo;

        //Construtor
        public function __construct($titular, $saldo)
        {
            $this->titular = $titular;
            $this->saldo = $saldo;
        }

        //Getters
        public function getTitular():string{
            return $this->titular;
        }
        public function getSaldo():int{
            return $this->saldo;
        }

        //Métodos
        public function depositar($valor){
            $this->saldo += $valor;
        }
        public function sacar($valor){
            $this->saldo -= $valor;
        }
        
    }

    //Instanciando a conta
    $minhaConta = new ContaBancaria("Bruno", 500);

    //Depositando valor
    $minhaConta->depositar(500);

    //Imprimindo valores
    echo $minhaConta->getTitular();
    echo "<br>";
    echo $minhaConta->getSaldo();


?>