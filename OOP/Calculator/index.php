<?php
require("class.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calc.php" method="post">

    <p>Welcome to my calcule</p>
    <input type="number" name="num1" placeholder="Enter Num 1">

    <select name="opp">
    <option value="+">Add</option>
    <option value="-">Sub</option>
    <option value="/">Div</option>
    <option value="*">Mul</option>
    </select>
    <input type="number" name="num2" placeholder="Enter Num 2">
    <button type="submit" name="submit">calcule</button>
    </form>
</body>
</html>