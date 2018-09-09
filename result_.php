<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: #666;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 450px; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #f1f1f1;
    height: 450px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<header>
  <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="#">สมัคร Run</a></li>
      <li><a href="#">ตรวจสอบ BIB</a></li>
      <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
    </ul>
  </nav>
  
  <article>
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
?>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

    </body>
</html>