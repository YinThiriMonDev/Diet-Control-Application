<html>
<head>
<title> Edit Diet Category</title>
<link rel="stylesheet" href="admin/css/style.css">
</head>
<body>

<h1>Edit Diet Category</h1>
<ul class="menu">
 <li><a href="dietplan-list.php">Manage Diet Plan</a></li>
 <li><a href="dietcategory_list.php">Manage Diet Category</a></li>
 <li><a href="orders.php">Manage Orders</a></li>
 <li><a href="logout.php">Logout</a></li>
 </ul>

<?php 
include("admin/confs/authorize.php");
include("admin/confs/dbconnect.php");

$id=$_GET['id'];
$stmt=$conn->prepare("SELECT * FROM mealcategory WHERE id=$id");
$stmt->execute();

$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<form action="dietcategory_update.php" method="post">
<input type="hidden" name="id" value="<?php  echo $row['id']?>">

<label for="categoryname"> Diet Category Name</label>
<input type="text" name="categoryname" value="<?php  echo $row['categoryname']?>">

<br><br>
<input type="submit" value="Update Diet Category">
</form>
</body>
</html>