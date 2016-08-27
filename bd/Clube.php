<?php

class Clube {

    private $cod_clube;
    private $nome;

    public function getCod_clube() {
        return $this->cod_clube;
    }

    public function setCod_clube($cod_clube) {
        $this->cod_clube = $cod_clube;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
}

?>