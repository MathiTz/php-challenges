<?php

$valor = 101; // valor é o numero que será testado
$primo = true;
$x = array('Teste', 'teste2', 'teste3');

for ($i = 2; $i < $valor; $i++) {
    if ($valor % $i == 0) {
        $primo = false;
        $i = $valor; // usado para sair do loop for, pode usar break se a linguagem permitir
    }
}

if ($primo == true) {
    $numero = $numero - 1; // remove 1 do numero pois encontrou um primo
    $x[$numero] = $valor; // armazena no vetor X
}

// echo $x[]; -> foreach