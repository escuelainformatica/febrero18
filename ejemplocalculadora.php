<?php
include 'modelo/Calculadora.php';
include 'servicio/CalculadoraSrv.php';

$resultado='';
$calc=new Calculadora(); // objeto vacio
if ( isset($_POST['botonsumar']) ) {
    $botonsumar = $_POST['botonsumar'];
    $calc=CalculadoraSrv::crear();
    $resultado=CalculadoraSrv::sumar($calc);

} else {
    $botonsumar='';
}


if ( isset($_POST['botonrestar']) ) {
    $botonrestar = $_POST['botonrestar'];
    $calc=CalculadoraSrv::crear();
    $resultado=CalculadoraSrv::restar($calc);
} else {
    $botonrestar='';
}



if ( isset($_POST['botonmultiplicar']) ) {
    $botonmultiplicar = $_POST['botonmultiplicarmultiplicar'];
    $calc=CalculadoraSrv::crear();
    $resultado=CalculadoraSrv::multiplicar($calc);

} else {
    $botonmultiplicar='';
}


if ( isset($_POST['botondividir']) ) {
    $botondividir = $_POST['botondividirt'];
    $calc=CalculadoraSrv::crear();
    $resultado=CalculadoraSrv::dividir($calc);

} else {
    $botondividir='';
}



include "vista/CalculadoraVista.php";