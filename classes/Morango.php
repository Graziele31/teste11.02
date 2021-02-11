<?php

class Morango extends Frutas {
    public $tamanho;
    
    public function __construct($cor, $nome, $tamanho) {
        $this->setNome($nome);
        $this->setCor($cor);
        $this->tamanho = $tamanho;
    }
  
    public function mensagem(){
        echo "Eu amo morango! <br>";
        $this->into();
    }
}
