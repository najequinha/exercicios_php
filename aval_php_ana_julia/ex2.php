<?php

$age = 62;

if($age < 18){
    echo "Menor de idade";
}
elseif($age > 18 and $age < 60){
    echo "Maior de idade";
}
elseif($age >= 60){
    echo "Maior de idade" . "<br>" . "Idoso(a)";
}