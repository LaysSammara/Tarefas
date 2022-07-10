<?php

include ('Produt.php');

class Vendas{ //variaveis que fazem parte da classe de vendas.
    public $produto;
    public $valorUn;
    public $valor;
    public $tipoVenda;
    
    

    public function calcular(){
        $valor = 0;//valor e igual a 0
        for($i=0; $i<=2; $i++){ //quando i for = 0 ele será menor que 2.
            $this->valor = $this->produto[$i]->valorTotal + $this->valor;
        }
    }


    public function gerarProdutos(){ //Criação dos produtos. 
        $produto1 = new Produtos(); //produto 1 
        $produto1->id = 1;
        $produto1->nome = 'Software';  
        $produto1->valor = 500;
        $produto1->quant = 4;
        $produto1->valorCalc();
        
        $produto2 = new Produtos(); //produto2
        $produto2->id = 2;
        $produto2->nome = 'Carro';
        $produto2->valor = 1000;
        $produto2->quant = 2;
        $produto2->valorCalc();

        $produto3 = new Produtos(); //produto3
        $produto3->id = 3;
        $produto3->nome = 'Maçã';
        $produto3->valor = 9;
        $produto3->quant = 2;
        $produto3->valorCalc();

        $produto4 = new Produtos(); //produto4
        $produto4->id =  4;
        $produto4->nome = 'Açaí';
        $produto4->valor = 10;
        $produto4->quant = 1;
        $produto4->valorCalc();

        $this->produto[0] = $produto1; //puxando valor do produto 1 e criando um array que comece do 0.
        $this->produto[1] = $produto2;
        $this->produto[2] = $produto3;
        $this->produto[3] = $produto4;
    }

    public function mostraVendas(){//mostrar resultados com os echo.

        echo '<br><table ><tr > 
        <td><strong>Nome</strong></td>
        <td><strong>Valor Un</strong></td>
        <td><strong>Quant</strong></td>
        <td><strong>Valor Total</strong></td>
        </tr>';

        for($i=0; $i<(count($this->produto)); $i++){
            echo '<tr><td>'.$this->produto[$i]->nome.'</td>';
            echo '<td>'.$this->produto[$i]->valor.'</td>';
            echo '<td>'.$this->produto[$i]->quant.'</td>';
            echo '<td>'.$this->produto[$i]->valorTotal.'</td>';
            
        }
        
        
    }

}

$v1 = new Vendas();
$v1->gerarProdutos();
$v1->mostraVendas();
$v1->calcular();

echo '<h3>Valor Total: '.$v1->valor.'</h3><br><hr>';
?>




















