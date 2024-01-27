<?php
require_once "human.php";

class teacher extends human implements humanInterface{
    private $phone;
    private $teacherNB;
    public function __construct($fulln,$yearofbirth,$phone,$teacherNB) {
      parent::__construct($fulln, $yearofbirth, $phone);
      $this->full_name = $fulln;
      $this->year_ofbirth = $yearofbirth;
      $this->phone = $phone;
      $this->teacherNB = $teacherNB;
    }
    public function ShowInfo() {
        echo "My name is : {$this->full_name} <br>";
        echo "My year of irth is :{$this->year_ofbirth} <br>";
        echo "My phone phone is :{$this->phone}<br>";
        echo "My teacherNB num is :{$this->teacherNB}<br>";
      }
}

?>