<?php
   $n1 = $_POST['n1'];
   $n2 = $_POST['n2'];


    if($n1 == $n2){

    echo" <script>history.go(-1);</script>";
}

else if ($n2 > $n1)
    echo "$n2 é maior e $n1 é menor. ";
else 
    echo "$n1 é maior e $n2 é o menor. ";
    
?>
