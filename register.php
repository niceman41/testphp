<!DOCTYPE html>
<html lang="th">
	<head>
		<meta charset="UTF-8">
		<title>สมัครวิ่งตุ๊ดตู่</title>
	</head>
<body>

<h2>Register Run for ตุ๊ดตู่</h2>

<form>
  <B>First name:</B><br>
  <input type="text" name="firstname">
  <br><br>
  Last name:<br>
  <input type="text" name="lastname">
  <br><br>
  Brithday(DD/MM/YY):<br>
  <input type="text" name="Day"size="3"> / <input type ="text" name ="Month"size="3"> / <input type = "text" name="Year" size="4">
  <br><br>
  Age:<br>
  <input type="text" name="age"size="3">
  <br><br>
  Sex:<br>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <br>
  Blood type:<br>
  <select name="BloodType">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="O">O</option>
    <option value="AB">AB</option>
    <option value="AB-">AB-</option>
  </select>
  <br><br>
  Citizenship:<br>
  <input type="text" name="citizenship">
  <br><br>
  Address:<br>
  <textarea name="message" rows="10" cols="30"></textarea>
  <br>
  <input type="submit">
</form>

<p>Note that the form itself is not visible.</p>

<p>Also note that the default width of a text input field is 20 characters.</p>

</body>
</html>