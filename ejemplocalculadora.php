<?php
include 'modelo/Calculadora.php';
include 'servicio/CalculadoraSrv.php';

$resultado='';
$calc=new Calculadora(); // objeto vacio
if ( isset($_POST['boton']) ) {
    $calc=CalculadoraSrv::crear();
    $resultado=CalculadoraSrv::sumar($calc);

}



if ( isset($_POST['boton']) ) {

    $calc=CalculadoraSrv::crear();
    $resultado=CalculadoraSrv::restar($calc);
}



if ( isset($_POST['boton']) ) {

    $calc=CalculadoraSrv::crear();
    $resultado=CalculadoraSrv::multiplicar($calc);

}


if ( isset($_POST['boton']) ) {

    $calc=CalculadoraSrv::crear();
    $resultado=CalculadoraSrv::dividir($calc);

}



include "vista/CalculadoraVista.php";