<?php
$error="";
$x="";
$y="";
$result="";
if(isset($_GET["operation"])){
    $x=$_GET["num1"];
    $y=$_GET["num2"];
    $op=$_GET["operation"];}
   
    if(is_numeric($x) && is_numeric($y)){
        switch($op){
            case 'add': $result=$x + $y; break;
            case 'sub': $result=$x - $y; break;
            case 'pro': $result=$x * $y; break;
            case 'div': $result=$x / $y; break;
        }
    } 
else{
    $error="Enter Number First";
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Simple Calculator</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style>
        body{
        border:double;
        height: 300px;
        width: 300px;
        margin-left: 500px;
        margin-top: 50px;
        border-width: 15px;
        border-color: black;
        border-radius: 10px;
        padding-left: 5px;
        }

        div{
            margin-bottom: 28px;
        }
        #num1{
            background:black;
            border-radius: 10px;
            padding: 10px;
            font-size: 15px;
            width: 40px;
            border: none;
            margin: 5px;
        }
        #num2{
            background:black;
            border-radius: 10px;
            padding: 10px;
            font-size: 15px;
            width: 40px;
            border: none;
            margin: 5px;
        }
        #result{
            background:black;
            border-radius: 10px;
            padding: 10px;
            font-size: 10px;
            width: 40px;
            border: none;
            margin: 5px;
        }
</style>
</head>

<body>
    <h1>Simple Calculator</h1>
    <h2><?=$error?></h2>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
<!-- Number 1 -->
<div>
    <label for="num1">Enter Number 1</label>
    <input type="number" name="num1" id="num1" value="<?= $x?>">
</div>
<!-- Number 2 -->
<div>
    <label for="num2">Enter Number 2</label>
    <input type="number" name="num2" id="num2" value="<?= $y?>">
</div>
<!-- Result -->
<div>
    <label for="result">Result</label>
    <input type="number" id="result" value="<?= $result?>" disabled>
</div>
<!-- Operation-->
<div>
    <input type="submit" value="add" name="operation">
    <input type="submit" value="sub" name="operation">
    <input type="submit" value="pro" name="operation">
    <input type="submit" value="div" name="operation">
</div>
    </form>
</body>
</html>