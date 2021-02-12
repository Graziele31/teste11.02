<?php


class Audi extends Carro {
    
    public function intro(): string {
     return "Escolha a qualidade alemã! Sou um $this->nome!";   
    }

}
