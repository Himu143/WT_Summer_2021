<?php
$validatename="";
$validatemail="";
$validatename=$validatemail="";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $validatename=$_POST["fname"];
    $validatemail=$_POST["email"];
if($validatename=="")
    {
        $validatename="Please enter a valid name !! ";    
    }


if (empty($validatemail) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$validatemail))
    {
        $validatemail="Please enter a valid email !! ";
    }

}

?>