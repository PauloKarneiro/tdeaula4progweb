<?php

$classe =  $_GET["class"];
$metodo = $_GET["acao"];

$classe .= 'Controller';

require_once 'controller/'.$classe.'.php';

$estudanteController = new $classe();
$estudanteController->$metodo();