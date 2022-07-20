<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

if ($n1 == $n2)
    echo "São iguais.";
else { 
    echo "São diferentes.<br>";
    if ($n1 > $n2)
        echo "Primeiro é maior que o segundo.";
    else
        echo "Segundo é maior que o primeiro.";
}
?>