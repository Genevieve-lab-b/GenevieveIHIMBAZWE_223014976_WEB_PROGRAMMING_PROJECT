<?php
include("db.php");

$sql = "INSERT INTO messages(fullname,email,phone,location,message)
VALUES(
'$_POST[fullname]',
'$_POST[email]',
'$_POST[phone]',
'$_POST[location]',
'$_POST[message]'
)";

mysqli_query($conn, $sql);

echo "Message sent successfully!";
?>