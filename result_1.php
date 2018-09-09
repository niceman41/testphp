<?php
// define variables and set to empty values
$fistname = $ZipCode = $tel = $lastname = $ShirtSize = $City = $Disease = $Day = $Month = $Year = $Age = $email = $Sex = $Bloodtype = $Citizenship = $Address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $tel = test_input($_POST["tel"]);
  $email = test_input($_POST["email"]);
  $Day = test_input($_POST["Day"]);
  $Month = test_input($_POST["Month"]);
  $Year = test_input($_POST["Year"]);
  $Age = test_input($_POST["age"]);
  $ZipCode = test_input($_POST["ZipCode"]);
  $email = test_input($_POST["email"]);
  $Sex = test_input($_POST["gender"]);
  $Bloodtype = test_input($_POST["BloodType"]);
  $Disease = test_input($_POST["Disease"]);
  $ShirtSize = test_input($_POST["ShirtSize"]);
  $Citizenship = test_input($_POST["Citizenship"]);
  $City = test_input($_POST["City"]);
  $Address = test_input($_POST["MesAdd"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
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
?>