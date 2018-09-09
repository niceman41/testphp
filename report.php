<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <style>* {
    box-sizing: border-box;
    }
    tbody{
        background: #666;
    }
    
</style>

</head>
<body>
<table class="table table-hover">
    <thead>
     <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Lastname</th>
      <th>Tel.</th>
      <th>Email</th>
      <th>Day</th>
      <th>Month</th>
      <th>Year</th>
      <th>Age</th>
      <th>Sex</th>
      <th>Blood type</th>
      <th>Disease</th>
      <th>ShirtSize</th>
      <th>Citizenship</th>
      <th>City</th>
      <th>Zipcode</th>
      <th>Address</th>
     </tr>
    </thead>
    <tbody>
<?php
include("conn/mysqlconn.php");

$sql = "SELECT * FROM userprofile";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>
        <tr>
            <td><?php echo $row["userid"];?></td>
            <td><?php echo $row["firstname"];?></td>
            <td><?php echo $row["lastname"];?></td>
            <td><?php echo $row["tel"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["Day"];?></td>
            <td><?php echo $row["Month"];?></td>
            <td><?php echo $row["Year"];?></td>
            <td><?php echo $row["Age"];?></td>
            <td><?php echo $row["gender"];?></td>
            <td><?php echo $row["Bloodtype"];?></td>
            <td><?php echo $row["Disease"];?></td>
            <td><?php echo $row["ShirtSize"];?></td>
            <td><?php echo $row["Citizenship"];?></td>
            <td><?php echo $row["City"];?></td>
            <td><?php echo $row["ZipCode"];?></td>
            <td><?php echo $row["Address"];?></td>
        </tr>      
 <?php       //echo "userid: " . $row["userid"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]." " . $row["tel"]." " . $row["email"]." " . $row["Day"]. " " . $row["Month"]." " . $row["Year"]." " . $row["Age"]." " . $row["gender"]." " . $row["Bloodtype"]." " . $row["Disease"]." " . $row["ShirtSize"]." " . $row["Citizenship"]." " . $row["City"]." " . $row["ZipCode"]." " . $row["Address"]."<br>";  
    }
    
} else {
    echo "0 results";
}
?>
</tbody> 
</table>
</body>