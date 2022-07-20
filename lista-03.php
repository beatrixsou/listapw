<?php

$time = $_POST['time'];
$hora = 0;
$minuto = 0;

$hora = date('h', strtotime($time));
$minuto = date('i', strtotime($time));

$time = ($hora * 60) + $minuto;
echo "$hora é o valor de hora e $minuto é o valor de minutos, e se passaram $time minutos desde o início do dia. "

?>