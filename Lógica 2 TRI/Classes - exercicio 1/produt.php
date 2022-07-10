<?php


class Produtos{ //classe do produto com suas variaveis e metodos
    public $id;
    public $nome;
    public $valor;
    public $quant;
    public $calcvalor;
    public $valorTotal;

    public function valorCalc(){ //função de calcular o valor vezes a quantidade.
        $valor = $this->valor;
        $quant = $this->quant;
        $this->valorTotal = $valor * $quant;
    }
}
?>



















