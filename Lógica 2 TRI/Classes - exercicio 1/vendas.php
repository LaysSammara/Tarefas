<?php


class Vendas{
    public $produtos;
    public $valor;
    private $numProd = 0;

    public function mostrar(){
        echo "Valor da Venda:" . $this-> valor . "<br>";
        for ($i = 0; $i < $this->numProd; $i++){
            echo "Produto:" . $this->produtos[$i]->nome .
            " Valor UN:" . $this -> produtos[$i]->valor .
            " QTD: " . $this->produtos[$i]->qtd .
            " Valor Total:" . $this->produtos[$i]->total . "<br>";
        }
    }

    public function calcValor(){
        $this->valor = 0;
        for ($i = 0; $i<$this->numProd; $i++){
            $this->valor += $this->produtos[$i]->total; 
        }
    }

    public function gerarP(){       
        $p1 = new Produto();
        $p1->id = 1;                $p1->nome = "Coca Cola";        $p1->valor = 10;
        $p1->qtd = 2;               $this->numProd++;               $p1->calcular();

        $p2 = new Produto();
        $p2->id = 2;                $p2->nome = "Lapis";            $p2-> valor = 3;
        $p2-> qtd = 2;              $p2->calcular();                $this->numProd++;

        $p3 = new Produto();        $p3->id = 3;                    $p3->nome = "Motocicleta";
        $p3->valor = 20000;         $p3-> qtd = 4;                  $p3->calcular();
        $this-> numProd;

        $p4 = new Produto();                         
        $p4-> valor = 2;   
        $p4->nome = "Salgado";         
        $p4-> calcular(); 
        $p4-> qtd = 5;
        $p4-> id = 4; 
        $this->numProd++;          

        $this->produtos[0] = $p1 ;
        $this->produtos[1] = $p2 ;
        $this->produtos[2] = $p3 ;
        $this->produtos[3] = $p4 ;      
    }




}

?>



















