<?Php
if(isset($_POST['submit'])){
require_once "File.php";
//File::help();
$File_name=$_POST['f_name'];
$File_content=$_POST['content'];
$File_ext=$_POST['f_ext'];
$file=new File($File_name,$File_ext);
$file->create();
$file->write($File_content);
// $file->search('mes');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../bootstrap.rtl.min.css">
</head>
<body>
<div class="container">
<div class="mt-2 mb-2">
    <h1 class="text-center">
    File Manipulation In PHP (Create , Search , Append ...)
    <button class="btn btn-warning btn-lg">Help </button>
    </h1>
    </div>
<div class="pt-2 mb-2">
    <form action="" method="post">
    <div class="mb-3">
    <label for="f_name" class="form-label">File Name</label>
    <input type="text" class="form-control mt-2" id="f_name" placeholder="Exemple : test" name="f_name">
    </div>
    <div class="mb-3">
    <label for="f_ext" class="form-label">File Extension</label>
    <input type="text" class="form-control mt-2" id="f_ext" placeholder="Exemple : txt" name="f_ext">
    </div>
    <div class="mb-3">
    <label for="content" class="form-label">File Content</label>
    <textarea name="content"cols="30" rows="10" class="form-control mt-2" >
    </textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-success btn-lg">Create </button>
    </form>
    </div>
</div>    
</body>
</html>