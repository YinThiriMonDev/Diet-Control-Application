<?php
session_start();
include("admin/confs/dbconnect.php");

$cust_name = $_POST['name'];
$cust_email = $_POST['email'];
$cust_phoneno = $_POST['phone'];
$cust_address = $_POST['address'];

$sql="INSERT INTO orders(cust_name, cust_email, cust_phoneno, cust_address, order_status, launched_date, authorized_date) VALUES ('$cust_name','$cust_email','$cust_phoneno','$cust_address', 0, now(), now())";
$conn->query($sql);
$order_id = $conn->lastInsertId();

foreach($_SESSION['cart'] as $id => $qty) {
    $sql="INSERT INTO order_history (order_id, mealplan_id, qty) VALUES ($order_id,$id,$qty)";
    $conn->query($sql);
}

unset($_SESSION['cart']);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Order Submitted</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Order Submitted</h1>

  <div class="msg">
    Your order has been submitted. We'll email the diet plan soon.
    <a href="index.php" class="done">Diet Plan Store</a>
  </div>

  <div class="footer">
    &copy; <?php echo date("Y") ?>. All right reserved.
  </div>
</body>
</html>