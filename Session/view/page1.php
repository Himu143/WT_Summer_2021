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
<h1>Personal Details</h1>
</head>
<body>
   <form action="" method="POST">
   
   <table>
<tr>
    <td>
    First name: 
    <br>
        <input type="text" name="First Name"  ><br>
        </td>
</tr>
    <tr>
        <td>
        Last name: 
        <br>
        <input type="text" name="Last Name"  ><br>
        </td>
    </tr>
    <tr>
        <td>
             email:
        <br>
        <input type="text" name="email" >    
        </td>
    </tr>
    <tr>
        <td>
        username: 
                
       <br>
        <input type="text" name="username"  >        
        </td>
    
    </tr>
    <tr>
            <td>
                password:
            

        <br>   
            <input type="password" name="password" >       
            </td>
    
    </tr>

    <tr>
        <td>
            website:
       <br>
        <input type="text" name="website"><br>     
        </td>
    
    </tr>
    
    <tr>
        <td>
        Select Gender:      
        
        <input type           = "radio" name= "Male">male
        <input type           = "radio" name="Female">female     
        </td><br>
       
    </tr>
    
   <tr>
   <td>
      <a href="../view/page2.php"><button>Submit</button></a>
        <input name="submit" type="reset" value="Reset">
        </td>
   </tr>
   

    </table>
   
   
   </form>

</body>
</html>