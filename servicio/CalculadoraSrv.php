<?php


class CalculadoraSrv
{
    public static function sumar(Calculadora $calc) {
        $result=$calc->num1+$calc->num2+$calc->num3+$calc->num4;
        return $result;
    }

    public static function restar(Calculadora $calc) {
        $result=$calc->num1-$calc->num2-$calc->num3-$calc->num4;

        return $result;
    }

    public static function multiplicar(Calculadora $calc) {
        $result=$calc->num1*$calc->num2*$calc->num3*$calc->num4;

        return $result;
    }

    public static function dividir(Calculadora $calc) {
        $result= $calc->num1/$calc->num2/$calc->num3/$calc->num4;

        return $result;
    }

    public static function crear() {
        $calc=new Calculadora();
        $calc->num1=$_POST['num1'];
        $calc->num2=$_POST['num2'];
        $calc->num3=$_POST['num3'];
        $calc->num4=$_POST['num4'];

        return $calc;
    }

    /**
     * Valida si la calculadora es correcta
     *
     * @param Calculadora $calc
     */
    public static function validar(Calculadora  $calc) {
        if(is_numeric($calc->num1)===false) {
            return false;
        }
        if(!is_numeric($calc->num2)) { // valor===false  es igual a !valor
            return false;
        }
        if(!is_numeric($calc->num3)) { // valor===false  es igual a !valor
            return false;
        }
        if(!is_numeric($calc->num4)) { // valor===false  es igual a !valor
            return false;
        }
        return true;

    }
}
