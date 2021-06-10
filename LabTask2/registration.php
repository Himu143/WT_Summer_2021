<?php include "control/results.php"; ?>
<!DOCTYPE html>
<html>
<head>
        <title>Validation Form</title>
      
<body>
       
<form action="" method="post">
    <table>
    <tr>
        <td>
            <h1>Registration</h1>
        </td>
    </tr>
<tr>
        <td>
            Full name: 
        </td>
            <td>
                <input type="text" name="fname"> <?php echo $validatename; ?>
            </td>
       
</tr>
<br>
<br>
    <tr>
        <td>
            Email: 
        </td>
            <td>
                <input type="text" name="email"> <?php echo $validateemail; ?>
            </td>
    </tr>    
<br><br>
    <tr>
        <td>
            Password: 
        </td>
            <td>
                <input type="password" name="password"> <?php echo $validatepass; ?>
            </td>
       
    </tr>
  <br>          
     <br>
    <tr>    
        <td>
            Comment : 
        </td>
            <td>
                    <textarea name = "" id="" cols="30" rows="4">
                    </textarea>
            </td>
        
    </tr>
       
<br><br>

    <tr>
        <td>
            Gender:
        </td>
        <td>
            <input type="radio" id="male" name="gender" value="male">
        
            <label for="male">Male</label>
        
            <input type="radio" id="female" name="gender" value="female">
        
            <label for="female">Female</label>
        
            <input type="radio" id="other" name="gender" value="other">
        
            <label for="other">Other</label>
            <?php echo $validateradio; ?>
        </td>
    </tr>
  
  
<br>

    <tr>
        <td>
            Please choose a hobby:
        </td>

        <td>
            <input type="checkbox" id="hobby1" name="hobby1" value="reading">Reading
            <input type="checkbox" id="hobby2" name="hobby2" value="singing">Singing
            <input type="checkbox" id="hobby3" name="hobby3" value="dancing">Dancing
          
            <?php echo $validatecheckbox; ?>

            <?php echo $h1;?>

            <?php echo $h2;?>

            <?php echo $h3;?>
        </td>
    </tr>
    
 <br><br>
 
 <tr>
                <td> 
                    <label for = "myfile"><b>Please Choose a File:</b></label>
               </td>
               <td>
                    <input type = "file" id="myfile" name="myfile">
                
                </td>
        
    
        </tr>


<br><br>
    <tr>
        <td>
            <input type="submit" value="SUBMIT">
            <input type="reset" value="RESET">
        </td>
    </tr>
</table>
</form>
</body>
</head>
</html>