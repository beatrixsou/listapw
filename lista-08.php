<?php

        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];

        if ($n1 > $n2 && $n1 > $n3)
            echo "O primeiro número é o maior ,e";
        else
        if($n2 > $n1 && $n2 > $n3)
            echo "O segundo número é o maior ,e";
        else
            echo "O terceiro número é o maior ,e";


        if ($n1 < $n2 && $n1 < $n3)
            echo " o primeiro número é o menor!";
        else if($n2 < $n1 && $n2 < $n3)
                echo " o segundo número é o menor!";
        else
                echo " o terceiro número é o menor!";        
        ?>