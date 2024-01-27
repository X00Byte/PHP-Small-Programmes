<?Php
if(isset($_POST['submit'])){
require_once "File.php";
// File::help();
$File_name=$_POST['f_name'];
$File_content=$_POST['content'];
$file=new File($File_name,'txt');
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
</head>
<body>
    File manipulation in php (Create , Search , Append ...)

    <form action="" method="post">
    FIle name
    <input type="text" name="f_name">
    Content :
    <textarea name="content"cols="30" rows="10">

    </textarea>
    <button type="submit" name="submit">Create</button>
    </form>
</body>
</html>