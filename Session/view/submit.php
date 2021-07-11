<?php
include('../control/submitCheck.php');

if(isset($_SESSION['username'])){
header("location: page1.php");
}
?>
<!DOCTYPE html>
<html>
<body>



<<form action="" method="POST">
   
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
        <input name="submit" type="submit" value="submit">
        <input name="submit" type="reset" value="Reset">
        </td>
   </tr>
   

    </table>
   
   
 

</body>
</html>