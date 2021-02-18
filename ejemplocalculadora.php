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












include "vista/CalculadoraVista.php";