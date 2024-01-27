<?php
require_once "helpers.php";
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رفع الملفات</title>
    <?php ShowStyle()?>
</head>
<body>
<div class="container">
<form action="procces.php" method="POST" enctype="multipart/form-data">
<div class="mb-3 mt-4">
  <label for="name" class="form-label">الإسم الكامل </label>
  <input type="text" class="form-control" id="name" name="fullname">
</div>
<div class="mb-3">
  <label for="pic" class="form-label">الصورة</label>
  <input class="form-control" type="file" name="picture" id="pic">
</div>
<button class="btn btn-outline-success mt-3" type="submit">أضف</button>
</form>
</div>
</body>
</html>
