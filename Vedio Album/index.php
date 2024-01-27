<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>ألبوم الفيديوهات</title>
 <!-- Include Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <style>
    video::-webkit-media-controls {
 display: none;
} 

 </style>

</head>
<body>
 <div class="container">
 <div class="h1 text-center mt-0 mb-0">
مستعرض الفيديوهات
    </div>
   <div class="row">
    <?php
   $VideoDir = "videos";
   $width = 320;
   $height = 240;
   if (is_dir($VideoDir))
   {
       if ($DirExist = opendir($VideoDir)){
          while (($file = readdir($DirExist)) !== false){
              if($file != ".gitignore"){
                echo  $str =  <<<EOD
            <div class="col-4">
            <video width="$width" height="$height" controls>
            <source src="$VideoDir/$file" type="video/mp4">
            </video>
            <a href="watch.php?video=$file" class="link-dark" >$file</a>
            </div> 
            EOD;
            }
              }
           

           closedir($DirExist);

         }
   }else{
    echo "ملف الفيديوهات ، غير موجود !";
   }

     
   ?>
     

     </div>
 </div>
 
</body>
</html>