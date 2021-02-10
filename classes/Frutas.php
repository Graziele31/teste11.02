<?php

class Frutas {

    private $cor;
    private $nome;
    private $peso;
    
    function __construct($cor, $nome, $peso="5kg") {
        $this->cor = $cor;
        $this->nome = $nome;
        $this->peso = $peso;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor($cor) {
        $this->cor = $cor;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($peso) {
        $this->peso = $peso;
    }
    

}
