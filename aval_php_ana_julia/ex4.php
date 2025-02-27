<?php 

function calcular_area($altura, $comprimento){
    $area = $altura * $comprimento;
    echo "Área do triângulo: " . $area;
}

calcular_area(5, 12);