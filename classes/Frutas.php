<?php

class Frutas {

    private $cor;
    private $nome;
    private $peso;
    
    function __construct($cor, $nome) {
        $this->cor = $cor;
        $this->nome = $nome;
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
    
    protected function into(){
        echo "A fruta é {$this->nome} e a cor é {$this->cor}";
    } 

}
