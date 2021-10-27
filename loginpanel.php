<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Panel</title>
</head>
<body> 

<form method="post">

Username<input type="text" name="username" placeholder="Enter Username"  required>
<br>

Password<input type="password" name="password" placeholder="Enter Password" required>

<input type="submit" name="btn" value="sub">

</form>

<?php

if(isset($_POST['btn']))
{

$un = $_POST['username'];
$pw = $_POST['password'];

if($un == "admin" && $pw == "123")    
{

   echo "<script>window.open('home.php','_self') </script>";
   
}

else{


echo "invalid username/password"; 

}
}

?>
    
</body>
</html>
