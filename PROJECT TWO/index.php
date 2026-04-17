<?php include("db.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

<h2>STUDENT REGISTRATION FORM</h2>

<form action="insert.php" method="POST">

First Name: <input type="text" name="first_name"><br><br>
Last Name: <input type="text" name="last_name"><br><br>

Date of Birth:
<select name="day">
<?php for($i=1;$i<=31;$i++) echo "<option>$i</option>"; ?>
</select>

<select name="month">
<?php
$months = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
foreach($months as $m) echo "<option>$m</option>";
?>
</select>

<select name="year">
<?php for($i=1990;$i<=2025;$i++) echo "<option>$i</option>"; ?>
</select>
<br><br>

Email: <input type="email" name="email"><br><br>
Mobile: <input type="text" name="mobile"><br><br>

Gender:
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<br><br>

Address:<br>
<textarea name="address"></textarea><br><br>

City: <input type="text" name="city"><br><br>
Pin Code: <input type="text" name="pin_code"><br><br>
State: <input type="text" name="state"><br><br>

Country:
<select name="country">
    <option>Rwanda</option>
    <option>Kenya</option>
    <option>Uganda</option>
    <option>Tanzania</option>
    <option>India</option>
    <option>USA</option>
</select>
<br><br>

Hobbies:
<input type="checkbox" name="hobbies[]" value="Drawing">Drawing
<input type="checkbox" name="hobbies[]" value="Singing">Singing
<input type="checkbox" name="hobbies[]" value="Dancing">Dancing
<input type="checkbox" name="hobbies[]" value="Sketching">Sketching
<br><br>

Qualification:
<select name="qualification">
    <option>Class X</option>
    <option>Class XII</option>
    <option>Graduation</option>
    <option>Masters</option>
</select>
<br><br>

<button type="submit">Submit</button>

</form>

</body>
</html>