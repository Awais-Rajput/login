<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<form method="post" >

<input type="text" name="val1" placeholder="inter value one" required="null value">
<br>

<input type="text" name="val2" placeholder="inter value two" required="null value">
<br>

<input type="text" name="opt" placeholder="select operator" required="null value">

<input type="submit" name="btn" value="run">

</form>



<?php

if(isset($_POST['btn']))
{

$name1 = $_POST['val1'];
$name2 = $_POST['val2'];
$op = $_POST['opt'];

}

if($op == '+'){

    echo "ad is" .$name1+$name2;
}
else{


    echo "invalid choice";
}

error_reporting(0);


?>





</body>
</html>
