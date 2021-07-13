<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<?php
    include "../model/db.php";
    error_reporting(0);
	$connection = new db();
    $conobj=$connection->OpenCon();
    
    $userQuery1=$connection->showProduct($conobj,"product",$_REQUEST["s_product"]);
	$userQuery=$connection->ShowAllProduct($conobj,"product");
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>
        Product Information
    </title>
</head>

<body>
    <h2>Search Product Here</h2>

    <form action="" method="post">


        Search by Product Name : <br>
        <input type='text' name='s_product' value="">
        <input name='search' type='submit' value='search'>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>Product Id</th>
                <th>Product Name</th> &nbsp;
                <th>Product Description </th>
                <th>Product Category</th>
                <th>Product Price</th>
                <th>Product Image</th>
            </tr>
        </thead>

        <tbody>
            <?php
					while($row = $userQuery1->fetch_assoc()){
				?>
            <tr>

                <td><?php echo $row['P_id']; ?></td>
                <td><?php echo $row['P_Name']; ?></td>
                <td><?php echo $row['P_Desc']; ?></td>
                <td><?php echo $row['P_Category']; ?></td>
                <td><?php echo $row['P_Price']; ?></td>
                <td><img src="<?php echo $row['P_Picture'];?>" width="100px" alt=""> </td>
            </tr>
            <?php } ?>
        <tbody>

    </table>

    <form action="" method="post">
    </form>
    <h3>All Products Details</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Product Name</th>
                <th>Product Description </th>
                <th>Product Category</th>
                <th>Product Price</th>
                <th>Product Image</th>
            </tr>
        </thead>

        <tbody>
            <?php
					while($row = $userQuery->fetch_assoc()){
				?>
            <tr>

                <td><?php echo $row['P_id']; ?></td>
                <td><?php echo $row['P_Name']; ?></td>
                <td><?php echo $row['P_Desc']; ?></td>
                <td><?php echo $row['P_Category']; ?></td>
                <td><?php echo $row['P_Price']; ?></td>
                <td><img src="<?php echo $row['P_Picture']; ?>" width="40px" alt=""></td>
            </tr>
            <?php } ?>
        <tbody>

    </table><br>
    <a href="pageone.php"> Go Back</a>
</body>

</html>