<?php
session_start();

include("admin/confs/dbconnect.php");

$cart=0;
if(isset($_SESSION['cart']))
{
    foreach ($_SESSION['cart'] as $qty)
    {
        $cart+=$qty;
    }
}

if(isset($_GET['id']))
{
    $categoryid=$_GET['id'];
    $diet=$conn->query("SELECT * FROM mealplan WHERE categoryid=$categoryid");
    
}
else
{
    $diet=$conn->query("SELECT * FROM mealplan");
    
}

$category=$conn->query("SELECT * FROM mealcategory");
?>

<!doctype html>
<html>
<head>
<title>Diet Plan Store</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid" style="background-image: url(admin/covers/g1.jpg)";>
 <h1>Diet Plan Store</h1>
 
 <div class="info">
  <a href="view-cart.php">
   (<?php echo $cart ?>) product in your cart
  </a>
 </div>

  <div class="sidebar">
  <ul class="cats">
   <li>
     <b><a href="index.php">All Category</a></b>
   </li>
   <?php 
   while($row=$category->fetch(PDO::FETCH_ASSOC))
    { ?> 
   <li>
    <a href="index.php?id=<?php echo $row['id']?>">
      <?php echo $row['categoryname'];?>
    </a>
   </li>
    <?php
    }
    ?>
  </ul>
  </div> 
 

<div class="main">
  <ul class="product">
<?php 
while ($row=$diet->fetch(PDO::FETCH_ASSOC))
{?>
<li>
<img src="admin/portrait/<?php echo $row['portrait']?>" height="150">
<b>
<br>
 <a href="dietplan-detail.php?id=<?php  echo $row['id']?>">
 <?php echo $row ['recipe']?>
 </a>
</b>

<i>$<?php  echo $row['price']?></i>

<a href="add-to-cart.php?id=<?php  echo $row['id']?>" class="add-to-cart">Add to Cart</a>

</li>
<?php 
}
?>
</ul>
</div>

<div class="footer">
&copy;<?php  echo date("Y")?>.All right reserved.
<a href="home.php">HOME</a>
</div>
</body>

</html>