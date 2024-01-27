<?php
require("class.php");
$oper=$_POST['opp'];
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$cal= new clacule($oper,$num1,$num2);
/* $var=$cal->validateN1();
$var2=$cal->validateN2(); */

try{

echo $num1 . $oper. $num2."=".$cal->calculate($num1,$num2);

}catch(TypeError $er){

    echo"Error :".$er->getMessage();
}

?>