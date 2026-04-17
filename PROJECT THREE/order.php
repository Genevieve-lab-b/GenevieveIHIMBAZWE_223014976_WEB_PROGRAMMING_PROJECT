<?php include("db.php"); ?>

<div class="navbar">
    <a href="index.php">Home</a>
</div>

<div class="section">
<h2>Place Order</h2>

<form action="order_save.php" method="POST">

<input type="text" name="fullname" placeholder="Full Name" required><br><br>
<input type="email" name="email" placeholder="Email" required><br><br>
<input type="text" name="phone" placeholder="Phone" required><br><br>

<select name="menu">
    <option>Fish</option>
    <option>Chicken</option>
    <option>Juice</option>
</select><br><br>

<input type="text" name="address" placeholder="Address" required><br><br>
<input type="date" name="order_date" required><br><br>

<button type="submit">Submit Order</button>

</form>
</div>