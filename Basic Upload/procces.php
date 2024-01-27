<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$picture_name=$_FILES['picture']['name'];
$picture_size=$_FILES['picture']['size'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_type=$_FILES['picture']['type'];
$picture_name_extension= explode('.',$picture_name);
$picture_exet=strtolower(end($picture_name_extension));
$no_picture=null;
//Allowed_Picture_ext
$allowed=array("png" ,"jpg" ,"jpeg");
//Testing
if(empty($picture_name)){
    //في السكريبت الاصلي كان تحقق من الصورة اذا كانت غير موجود يتم اضهار خطأ ، لكن هنا اضفت خاصية الصورة الافتراضية في حالة عدم اضافة الصورة
    $no_picture=true;
}else{
if(!in_array($picture_exet,$allowed)){
$error_array[]= '<div class="alert alert-danger"> صيغة الصورة غير مقبولة </div> .</br>';
}
if($picture_size > 1000024){
$error_array[]='<div class="alert alert-danger"> حجم الصورة كبير </div> .</br>';
}
}
if(!empty($error_array)){
    foreach ($error_array as $error){
    echo $error;
    die;
    }
}elseif(empty($err)){

    if ($no_picture){
      $picture='defUser.jpeg';
    }else{
      $picture=rand(0,100000000).'.'.$picture_exet;
      move_uploaded_file($picture_tmp_name ,"uploads/".$picture);
    }
    $data = array(
      'fullname' => $_POST["fullname"],
      'picture' => $picture
    );
    $jsonData = json_encode($data);
    $json_filename = 'data.json';
    $file = fopen($json_filename, 'w');
    $existingData = file_get_contents($json_filename);
    if (!empty($jsonData)){
      if (!empty($existingData)){
      $newData = json_decode($existingData, true);
      array_push($newData, $data);
      $updatedData = json_encode($newData);
      file_put_contents($json_filename, $updatedData);
      }else{
      file_put_contents($json_filename,'[' . "\n", FILE_APPEND);
      file_put_contents($json_filename, $jsonData . "\n", FILE_APPEND);
      file_put_contents($json_filename, ']' . "\n", FILE_APPEND);
      }
    // probleme exrase tous les donnes
    }
    fclose($file);
    header("Location: users.php");
    die;
  }

