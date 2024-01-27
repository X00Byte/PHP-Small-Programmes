<?php
require_once "Classes/teacher.php";
if(isset($_POST['submit'])){
    $teacher= new teacher($_POST['full_name'],$_POST['year_ofbirth'],$_POST['phone'],$_POST['teacherNB']);
    $teacher->ShowInfo();
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../bootstrap.rtl.min.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
        <div class="mb-3 mt-4">
        <label for="full_name" class="form-label">الإسم الكامل </label>
        <input type="text" class="form-control" id="full_name" name="full_name">
        </div>
        <div class="mb-3 mt-4">
        <label for="year_ofbirth" class="form-label">تاريخ الميلاد </label>
        <input type="text" class="form-control" id="year_ofbirth" name="year_ofbirth">
        </div>
        <div class="mb-3 mt-4">
        <label for="phone" class="form-label">رقم الهاتف </label>
        <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="mb-3 mt-4">
        <label for="teacherNB" class="form-label">رقم التدريس </label>
        <input type="text" class="form-control" id="teacherNB" name="teacherNB">
        </div>
        <button type="submit" name="submit">إنشاء جديد</button>
        </form>
    </div>
</body>
</html>