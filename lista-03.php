<?php

    $valor = $_POST['valor'];

    $dados = explode(":", $valor);

    $dados1 = $dados[0]*60 + $dados[1];
    echo "São " . $dados[0] . " :  " . $dados[1] . ". Onde $dados[0] é 
as horas e $dados[1] é os minutos. E se passaram $dados1 horas desde o inicio do dia!";
    
   

?>