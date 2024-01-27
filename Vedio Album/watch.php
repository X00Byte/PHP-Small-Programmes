<?php
if (!isset($_GET['video']))
header(".index.php");
die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$_GET['video'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <div class="container">
    <nav class="h1 text-center mt-0 mb-0">
     <a href="./index.php" class="btn btn-success">العودة إلى ألبوم الفيديوهات</a>
    </nav>
    <div class="text-center">
    <video width="700" height="600" controls>
            <source src="videos/<?=$_GET['video'] ?>" type="video/mp4">
    </video>
    <p class="h1">
    <?=$_GET['video'] ?>
    </p>
    </div>
   </div>
</div>
</body>
</html>