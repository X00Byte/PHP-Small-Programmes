<?php
class clacule{
    public $operator;
    public $num1;
    public $num2;

    public function __construct($one ,$two,$three){
        $this->operator=$one;
        $this->num1=$two;
        $this->num2=$three;
    }
 /*    public function validateN1(){
      $var1=filter_var($this->num1,FILTER_VALIDATE_INT ,["flags" => FILTER_NULL_ON_FAILURE]);
      return $var1;
    }
    public function validateN2(){
        $var2=filter_var($this->num2,FILTER_VALIDATE_INT ,["flags" => FILTER_NULL_ON_FAILURE]);
        return $var2;
    } */
    public function calculate ($var1,$var2){
            switch ($this->operator){
            case '+';
            $result =$var1+$var2;
            return $result;
            break;
            case '-';
            $result =$var1-$var2;
            return $result;
            break;
            case '/';
            $result =$var1/$var2;
            return $result;
            break;
            case '*';
            $result =$var1*$var2;
            return $result;
            break;
            default:
            echo "-____________-";
            break;
        }


    }
}



?>
