<?php
/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); */
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رفع الملفات</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.rtl.min.css">
    <link href="style.css" rel="stylesheet">
    <?php include_once "helpers.php"; ShowStyle() ?>
</head>
<body>
    <div clas="container">
    <div class="row justify-content-center">
    <div class="col-8">
    <table class="table manage">
  <thead>
    <tr>
      <th scope="col">=</th>
      <th scope="col">الصورة</th>
      <th scope="col">الاسم</th>
    </tr>
  </thead>
  <tbody>
  <?php
  /*   echo '<pre>';
  var_dump($data['picture']);
  echo '</pre>'; 
  die; */
  $jsonData = file_get_contents('data.json');
  $data = json_decode($jsonData, true);  
  $id=1;
  foreach ($data as $item) {
   echo' <tr>
   <th scope="row">'.$id.'</th>
   <td class="image" ><img src="uploads/'.$item['picture'].'"/></td>
   <td>'.$item['fullname'].'</td>
   </tr>';
    $id++;
  }
  ?>
   
  </tbody>
</table>
    </div>
    </div>
    </div>
    
</body>
</html>
