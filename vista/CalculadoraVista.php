<form method="post">

    num1:<input type="text" name="num1" value="<?=$calc->num1; ?>" ><br>
    num2:<input type="text" name="num2" value="<?=$calc->num2; ?>"><br>

    num3:<input type="text" name="num3" value="<?=$calc->num3; ?>" ><br>
    num4:<input type="text" name="num4" value="<?=$calc->num4; ?>"><br>

    <input type="submit" name="botonsumar" value="sumar" />
    <input type="submit" name="botonrestar" value="restar" />
    <br>
    <input type="submit" name="botonmultiplicar" value="multiplicar" />
    <input type="submit" name="botondividir" value="dividir" />
    <br>
    el resultado es <?=$resultado ?>

</form>




