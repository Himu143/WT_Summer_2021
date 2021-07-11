<?php
session_start(); 

if(empty($_SESSION["username"])) 
{
header("Location: ../control/submit.php"); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
 "
    <title>page 3</title>
</head>
<body>
    <h1>Your all details</h1>
    <a href="../view/page1.php">Back to home </a>
</body>
</html>