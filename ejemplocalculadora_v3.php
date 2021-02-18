<?php
include 'modelo/Calculadora.php';
include 'servicio/CalculadoraSrv.php';

$resultado='';
$calc=new Calculadora(); // objeto vacio
$validacion=true;

 // if else = logica, switch

if(isset($_POST['boton'])) {
    $calc = CalculadoraSrv::crear();
    $validacion=CalculadoraSrv::validar($calc);
    if($validacion===false) {
        $resultado="Error de datos";
    } else {
        switch ($_POST['boton']) {
            case 'sumar':
                $resultado = CalculadoraSrv::sumar($calc);
                break;
            case 'restar':
                $resultado = CalculadoraSrv::restar($calc);
                break;
            case 'multiplicar':
                $resultado = CalculadoraSrv::multiplicar($calc);
                break;
            case 'dividir':
                $resultado = CalculadoraSrv::dividir($calc);
                break;
            default: // opcional
                echo "caso no conocido";
                break;
        }
    }




}



include "vista/CalculadoraVista.php";