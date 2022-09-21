<?php
require 'config.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email, FILTER_VALIDADE_EMAIL');

if($name)