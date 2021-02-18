<?php


class CalculadoraSrv
{
    public static function sumar(Calculadora $calc) {
        $result=$calc->num1+$calc->num2;
        return $result;
    }

    public static function restar(Calculadora $calc) {
        $result=$calc->num1-$calc->num2;

        return $result;
    }
    public static function crear() {
        $calc=new Calculadora();
        $calc->num1=$_POST['num1'];
        $calc->num2=$_POST['num2'];

        return $calc;
    }

}