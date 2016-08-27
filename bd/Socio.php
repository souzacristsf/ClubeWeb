<?php

class Socio {

    private $cod_clube;
    private $cod_socio;
    private $nome;

    public function getCod_clube() {
        return $this->cod_clube;
    }

    public function setCod_clube($cod_clube) {
        $this->cod_clube = $cod_clube;
    }
    
    public function getCod_socio() {
        return $this->cod_socio;
    }

    public function setCod_socio($cod_socio) {
        $this->cod_socio = $cod_socio;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
}

?>