<?php

class Produtos{
    public $id;
    public $nome;
    public $valor;
    public $quant;
    public $calcvalor;
    public $valortotal;

    public function valorCalc(){
        $valor = $this->valor;
        $quant = $this->quant;
        $this->valortotal = $valor * $quant;
    }
}
?>