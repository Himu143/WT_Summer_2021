<?php include "control/myaction.php"; ?>
<html>
<body> 
        <h1><u> Registration Form</u></h1>
<form action="" method="post"  >
<table>
<tr>
    <td>
        Full Name: <input type="text" name="fname"> <?php echo $validatename; ?><br>
    </td>
    <br>
</tr>
<tr>
    <td>
        Email: <input type="text" name="email"> <?php echo $validatemail; ?><br><br>
    </td>
   

    <tr>
    
        <td>  
        <input type="Submit">
        <input type="reset" value="Reset">
        </td>
    </tr>

</tr>
</table>

</form>

</body>
</html>
<?php
echo $validatename;
echo "<br>";
echo $validatemail;
echo "<br>";

?>