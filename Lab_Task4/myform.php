<?php include "control/process.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
</head>

<body>
    <h1>Registration Form</h1>

    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <b>Full Name :</b>
                </td>
                <td>
                    <input name="fname" type="text">
                </td>
            </tr>

            <tr>
                <td>
                    <b> Email : </b>
                </td>
                <td>
                    <input type="email" name="email">
                </td>
            </tr>

            <tr>
                <td>
                    <b>Password :</b>
                </td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>

            <tr>
                <td>
                    <b> Comment :</b>
                </td>
                <td>
                    <textarea rows="3" cols="30" name="comment"></textarea>
                </td>
                </td>
            </tr>

            <tr>
                <td>
                    <b> Gender : </b>
                </td>
                <td>
                    <input type="radio" id="male" name="gender" value="Male"> Male
                    <input type="radio" id="female" name="gender" value="Female"> Female
                    <input type="radio" id="other" name="gender" value="Other"> Other
                </td>
            </tr>
            <tr>
                <td>
                    <b> Please Choose a hobby :</b>
                </td>
                <td>
                    <input type="checkbox" name="hobby1" value="Singing"> Singing
                    <input type="checkbox" name="hobby2" value="Dancing"> Dancing
                    <input type="checkbox" name="hobby3" value="Reading"> Reading
                </td>
            </tr>
            <tr>
                <td>
                    <b>Please Choose a File:</b>
                </td>

                <td>
                    <input type="file" name="fileupload">

                </td>


            </tr>

            <tr>
                <td> <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>