<?php
include("conn/mysqlconn.php");
$fistname = $ZipCode = $tel = $lastname = $ShirtSize = $City = $Disease = $Day = $Month = $Year = $Age = $email = $Sex = $Bloodtype = $Citizenship = $Address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = test_input($_POST["firstname"]);
    $lastname = test_input($_POST["lastname"]);
    $tel = test_input($_POST["tel"]);
    $email = test_input($_POST["email"]);
    $Day = test_input($_POST["Day"]);
    $Month = test_input($_POST["Month"]);
    $Year = test_input($_POST["Year"]);
    $Age = test_input($_POST["Age"]);
    $Sex = test_input($_POST["gender"]);
    $Bloodtype = test_input($_POST["Bloodtype"]);
    $ShirtSize = test_input($_POST["ShirtSize"]);
    $Disease = test_input($_POST["Disease"]);
    $Citizenship = test_input($_POST["Citizenship"]);
    $City = test_input($_POST["City"]);
    $ZipCode = test_input($_POST["ZipCode"]);
    $Address = test_input($_POST["Address"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>ข้อมูลของคุณ:</h2>";
echo "Firstname: ".$firstname;
echo "<br>";
echo "Lastname: ".$lastname;
echo "<br>";
echo "Tel: ".$tel;
echo "<br>";
echo "E-mail: ".$email;
echo "<br>";
echo "Day ".$Day;
echo "  Month ".$Month;
echo "  year ".$Year;
echo "<br>";
echo "Age: ".$Age;
echo "<br>";
echo "Sex: ".$Sex;
echo "<br>";
echo "Bloodtype: ".$Bloodtype;
echo "<br>";
echo "Shirt size: ".$ShirtSize;
echo "<br>";
echo "Congenital disease: ".$Disease;
echo "<br>";
echo "Citizenship: ".$Citizenship;
echo "<br>";
echo "City: ".$City;
echo "<br>";
echo "Zip code: ".$ZipCode;
echo "<br>";
echo "Address: ".$Address;

//insert data
$sql = "INSERT INTO userprofile (firstname, lastname, tel, email, Day, Month, Year, Age, gender, Bloodtype, ShirtSize, Disease, Citizenship, City, ZipCode, Address) 
VALUES ('$firstname', '$lastname','$tel','$email','$Day','$Month','$Year', '$Age', '$Sex', '$Bloodtype', '$ShirtSize', '$Disease', '$Citizenship', '$City', '$ZipCode', '$Address')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "<br>";
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>