<?php
include ('Produto.php');

class Vendas{
    public $produto;
    public $numVenda;
    public $valorUn;
    public $valor;
    public $tVenda;
    
    

    public function calcular(){
        $valor = 0;
        for($i=0; $i<=2; $i++){
            $this->valor = $this->produto[$i]->valorTotal + $this->valor;
        }
    }


    public function gerarProdutos(){
        $prod1 = new Produtos();
        $prod1->id = 1;
        $prod1->nome = 'Abacaxi';
        $prod1->valor = 3;
        $prod1->quant = 4;
        $prod1->valorCalc();
        
        $prod2 = new Produtos();
        $prod2->id = 2;
        $prod2->nome = 'software';
        $prod2->valor = 7;
        $prod2->quant = 4;
        $prod2->valorCalc();

        $prod3 = new Produtos();
        $prod3->id = 3;
        $prod3->nome = 'Maçã';
        $prod3->valor = 8;
        $prod3->quant = 32;
        $prod3->valorCalc();

        $prod4 = new Produtos();
        $prod4->id = 4;
        $prod4->nome = 'Banana';
        $prod4->valor = 8;
        $prod4->quant = 55;
        $prod4->valorCalc();
        $this->produto[0] = $prod1;
        $this->produto[1] = $prod2;
        $this->produto[2] = $prod3;
        $this->produto[3] = $prod4;
    }

    public function mostraVendas(){

        echo '<table ><tr >
        <td><strong>Venda: '.$this->numVenda.' </strong></td>
        
        <td><strong>Nome</strong></td>
        <td><strong>Valor Un</strong></td>
        <td><strong>Quant</strong></td>
        <td><strong>Valor Total</strong></td>
        </tr>';

        for($i=0; $i<(count($this->produto)); $i++){
            echo '<tr><td></td><td>'.$this->produto[$i]->nome.'</td>';
            echo '<td>'.$this->produto[$i]->valor.'</td>';
            echo '<td>'.$this->produto[$i]->quant.'</td>';
            echo '<td>'.$this->produto[$i]->valorTotal.'</td>';
            
        }
        
        
    }

}


?>