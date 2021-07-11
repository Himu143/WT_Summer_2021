<?php

session_start(); 

 $error="";

if (isset($_POST['submit'])) {
if (($_POST['firstname']) || ($_POST['lastname']||($_POST['email'] ||($_POST['username']||($_POST['password']||($_POST['website'])) 
{
$error = "Username or Password is invalid";
}
else
{

$_SESSION["username"] = $_POST['username'];
$_SESSION["password"] = $_POST['password'];
$_SESSION["email"] = $_POST['email'];
$_SESSION["website"] = $_POST['website'];

   }
 
}



?>
