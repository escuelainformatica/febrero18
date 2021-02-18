<?php
include 'modelo/Calculadora.php';
include 'servicio/CalculadoraSrv.php';

$resultado='';
$calc=new Calculadora(); // objeto vacio


 // if else = logica

if(isset($_POST['boton'])) {

    if ($_POST['boton'] === 'sumar') {
        $calc = CalculadoraSrv::crear();
        $resultado = CalculadoraSrv::sumar($calc);
    }

    if ($_POST['boton'] === 'restar') {
        $calc = CalculadoraSrv::crear();
        $resultado = CalculadoraSrv::restar($calc);
    }

    if ($_POST['boton'] === 'multiplicar') {
        $calc = CalculadoraSrv::crear();
        $resultado = CalculadoraSrv::multiplicar($calc);
    }

    if ($_POST['boton'] === 'dividir') {

        $calc = CalculadoraSrv::crear();
        $resultado = CalculadoraSrv::dividir($calc);
    }
}



include "vista/CalculadoraVista.php";