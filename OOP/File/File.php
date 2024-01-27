<?php
class File {
    private $F_name;
    private $F_ext;

    public function __construct($fname,$ext){
        $this->F_name = $fname;
        $this->F_ext = $ext;
    }

    public function create (){
        $File_name=$this->F_name;
        $File_extension=$this->F_ext;
        $file = fopen("$File_name.$File_extension", "w") or die("Unable to open file!");
        fclose($file);
    }
    public function search ($keyword){
        $File_name=$this->F_name;
        $File_extension=$this->F_ext;
        $file = fopen("$File_name.$File_extension", "r") or die("Unable to open file!");
        $content = fread($file,filesize("$File_name.$File_extension"));
        fclose($file);
        if(strpos($content,$keyword) !== false){
            echo "$keyword found";
        } else {
            echo "$keyword not found";
        }

    }
    public function isempty (){
     ///

    }
    public function append ($content){
      ///
    }
    public function write($content){
        
        $fileName = "$this->F_name";
        $fileExtension = ".$this->F_ext";
        $fullFileName = $fileName . $fileExtension;
        file_put_contents($fullFileName,$content);
    }
    public static function help(){
        echo"File manipulation using PHP oop";
        echo"check if exist";
        echo"Search in file's cotent";
        echo"CRUD operation";
    }
}

?>