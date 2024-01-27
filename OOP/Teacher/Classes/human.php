<?php
abstract class human {
    private $FUllName;
    private $YearOfBirth;
    public function __construct($fullname,$yearofbirth){
        $this->FUllName = $fullname;
        $this->YearOfBirth = $yearofbirth;
      }
}
interface humanInterface{

  public function ShowInfo();

}
?>