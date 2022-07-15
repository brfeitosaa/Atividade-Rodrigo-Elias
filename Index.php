<?php

include ('Vendas.php');


$v1 = new Vendas();
$v1->quantidadevendas = 1;
$v1->TipoVenda = 'prazopago';
$v1->gerarProdutos();
$v1->calcular();

$v2 = new Vendas();
$v2->quantidadevendas = 2;
$v2->TipoVenda = 'prazopago';
$v2->gerarProdutos();
$v2->calcular();

$v3 = new Vendas();
$v3->quantidadevendas = 3;
$v3->TipoVenda = 'avista';
$v3->gerarProdutos();
$v3->calcular();

$v4 = new Vendas();
$v4->quantidadevendas = 4;
$v4->TipoVenda = 'prazo';
$v4->gerarProdutos();
$v4->calcular();

$vendas = [];
$vendas[0] = $v1;
$vendas[1] = $v2;
$vendas[2] = $v3;
$vendas[3] = $v4;


$avista = [];
$prazo = [];
$prazopago = [];

for($x=0; $x<4; $x++){
    $t = $vendas[$x]->TipoVenda;

    if($t === 'prazopago'){
        array_push($prazopago, $vendas[$x]);
    }   

    elseif($t === 'prazo'){
        array_push($prazo, $vendas[$x]);
    }

    elseif($t === 'avista'){
        array_push($avista, $vendas[$x]);
    }
}

function ImprimeVendas($vetor){
    for($j=0; $j<(count($vetor)); $j++){

        $vetor[$j]->Imprimir();
    }
}

echo '<h1>😎 VENDAS</h1>';
echo '<p>Brenda Rodrigues Feitosa</p><hr>';
echo '<h2>Pagas A prazo pago</h2>';
ImprimeVendas($prazopago);
echo '<hr><br>';

echo '<h2>Pagas A vista</h2>';
ImprimeVendas($avista);
echo '<hr><br>';

echo '<h2>Pagas a prazo<h2>';
ImprimeVendas($prazo);
echo '<hr><br>';

?>