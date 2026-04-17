<?php
session_start();
include("db.php");

if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>

<h2>Customer Orders</h2>

<a href="logout.php">Logout</a>

<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Menu</th>
<th>Address</th>
<th>Date</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM orders");

while($row = mysqli_fetch_array($result)){
    echo "<tr>
    <td>$row[fullname]</td>
    <td>$row[email]</td>
    <td>$row[phone]</td>
    <td>$row[menu]</td>
    <td>$row[address]</td>
    <td>$row[order_date]</td>
    </tr>";
}
?>

</table>