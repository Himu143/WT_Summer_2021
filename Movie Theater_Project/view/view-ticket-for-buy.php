<?php 
    include('../control/sessioncontrol.php');
    require_once ('../model/model.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Oder Food Items</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="header">
        <h2>Online Food Ordering System</h2></strong>
    </div>
    <div class="main-body">
        <p><a href="../view/home-page.php" class="link-hvr">← Back to Home</a>
        <p>
        <h1>BUY TICKET FROM LIST</h1>

        <?php
        //Db connect";
        $connection = new db();
        $conn=$connection->OpenCon();
        $userQuery=$connection->ShowItem($conn,"ticketlist");     

        //$conn->query($sql);
        echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Movie Name</th>
            <th>Category</th>
            <th>Showing Date</th>
            <th>Showing Time</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
        </tr>";

        if($userQuery->num_rows > 0)
        {
          while($row=$userQuery->fetch_assoc())
          { 
            $id = $row['id'];
            $img = $row['image'];
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['moviename'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['time'] . "</td>";
            echo "<td>" . $row['price']."TK". "</td>";
            echo "<td> <img src='../resources/movie_img/$img' width='150'></td>";
            echo "<td> <a href='../view/create-order.php?movie_id=$id' class='link-hvr btn'>ORDER</a> </td>";
            echo "</tr>";
          }
          echo "</table>";
          $conn->close();
        }
      ?>
    </div>
    <br><br><br><br><br><br>

    <?php include 'footer.php' ; ?>
</body>

</html>