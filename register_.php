<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ดตู่</title>
<style>* {
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
    height: 1200px; /* only for demonstration, should be removed */
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
    height: 1200px; /* only for demonstration, should be removed */
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
<h1>ฉันจะ Run For ตุ๊ดตู่</h1>
<form method="post"action="result.php">
  <B>First name:</B><br>
  <input type="text" name="firstname">
  <br><br>
  Last name:<br>
  <input type="text" name="lastname">
  <br><br>
  Tel:<br>
  <input type="text" name="tel">
  <br><br>
  E-mail:<br>
  <input type="text" name="email">
  <br><br>
  Brithday(DD/MM/YYYY):<br>
  <input type="text" name="Day"size="3"> / <input type ="text" name ="Month"size="3"> / <input type = "text" name="Year" size="4">
  <br><br>
  Age:<br>
  <input type="text" name="Age"size="3">
  <br><br>
  Sex:<br>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <br>
  Blood type:<br>
  <select name="Bloodtype">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="O">O</option>
    <option value="AB">AB</option>
    <option value="ETC.">ETC.</option>
  </select>
  <br><br>
  Congenital disease*(ถ้าไม่มีไม่ต้องใส่):<br>
  <input type="text" name="Disease">
  <br><br>
  Preferred Shirt Size*<br><select name = "ShirtSize">
        <option value="SS">SS 36"</option>
        <option value="S">S 38"</option>
        <option value="M">M 40"</option>
        <option value="L">L 42"</option>
        <option value="XL">XL 44"</option>
        <option value="XXL">XXL 46"</option>
    </select>
    <br><br>
  Citizenship:<br>
  <input type="text" name="Citizenship">
  <br><br>
  City:<br>
  <input type="text" name="City">
  <br><br>
  Zip code:<br>
  <input type="text" name="ZipCode">
  <br><br>
  Address:<br>
  <textarea name="Address" rows="10" cols="30"></textarea>
  <br>
  <input type="submit">
</form>
</article>
</section>

<footer>
  <p>Footer</p>
</footer>

    </body>
</html>