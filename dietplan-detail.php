<!doctype html>
<html>
<head>
<title>Diet Plan Detail</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Diet Plan Detail</h1>
<?php 
  include("admin/confs/dbconnect.php");
  $id=$_GET['id'];
  $dietplan=$conn->query("SELECT * FROM mealplan WHERE id=$id");
  $row=$dietplan->fetch(PDO::FETCH_ASSOC);
?>

<div class="detail">
<a href="index.php" class="back">&laquo; Go Back</a>

<img src="admin/portrait/<?php echo $row['portrait']?>">

<h2><?php echo $row['recipe']?></h2>
<i>$<?php echo $row['price']?></i>
<b><?php echo $row['description']?></b>
<a href="add-to-cart.php?id=<?php echo $id ?>" class="add-to-cart">
   Add to cart
</a>

</div>

<div class="footer">
 &copy;<?php echo date("Y")?>.All rights reserved.
 </div>
</body>
</html>
