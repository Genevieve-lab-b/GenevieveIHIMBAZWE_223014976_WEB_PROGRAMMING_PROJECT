<?php
include("db.php");

// DOB conversion
$dob = $_POST['year'] . "-" . $_POST['month'] . "-" . $_POST['day'];

// hobbies array to string
$hobbies = isset($_POST['hobbies']) ? implode(",", $_POST['hobbies']) : "";

$sql = "INSERT INTO students (
first_name, last_name, dob, email, mobile, gender,
address, city, pin_code, state, country, hobbies, qualification
) VALUES (
'$_POST[first_name]',
'$_POST[last_name]',
'$dob',
'$_POST[email]',
'$_POST[mobile]',
'$_POST[gender]',
'$_POST[address]',
'$_POST[city]',
'$_POST[pin_code]',
'$_POST[state]',
'$_POST[country]',
'$hobbies',
'$_POST[qualification]'
)";

if (mysqli_query($conn, $sql)) {
    echo "Student Registered Successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>