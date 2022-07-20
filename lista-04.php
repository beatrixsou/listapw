<?php

$num = $_POST['num'];

if ($num > 0)
    echo "$num é positivo";
else
    if ($num == 0)
        echo "$num é nulo";
    else
        echo "$num é negativo";
    
?>