<?php

include ('VENDAS.php');

//Tipos de Venda
//0 - a prazo
//1 - a vista
//2 - a prazo pago

$ve1 = new VENDAS();
$ve1->numVenda = 1;
$ve1->tVenda = 0;
$ve1->gerarProdutos();
$ve1->calcular();

$ve2 = new VENDAS();
$ve2->numVenda = 1;
$ve2->tVenda = 0;
$ve2->gerarProdutos();
$ve2->calcular();

$ve3 = new VENDAS();
$ve3->numVenda = 2;
$ve3->tVenda = 2;
$ve3->gerarProdutos();
$ve3->calcular();

$ve4 = new VENDAS();
$ve4->numVenda = 4;
$ve4->tVenda = 1;
$ve4->gerarProdutos();
$ve4->calcular();

$ve5 = new VENDAS();
$ve5->numVenda = 5;
$ve5->tVenda = 1;
$ve5->gerarProdutos();
$ve5->calcular();

$VENDAS = [];
$VENDAS[0] = $ve1;
$VENDAS[1] = $ve2;
$VENDAS[2] = $ve3;
$VENDAS[3] = $ve4;
$VENDAS[4] = $ve5;


$aprazo = [];
$avista = [];
$aprazopago = [];

for($z=0; $z<5; $z++){
    $tipo = $VENDAS[$z]->tVenda;

    if($tipo == 0){
        array_push($aprazo, $VENDAS[$z]);
    }

    if($tipo == 1){
        array_push($avista, $VENDAS[$z]);
    }

    if($tipo == 2){
        array_push($aprazopago, $VENDAS[$z]);
    }
}

function mostraDados($v){
    for($h=0; $h<(count($v)); $h++){

        $v[$h]->mostraVENDAS();
    }
}


echo '<h1>A Prazo</h1>';
mostraDados($aprazo);


echo '<h1>A Vista</h1>';
mostraDados($avista);


echo '<h1>A Prazo Pagas<h1>';
mostraDados($aprazopago);



?>
