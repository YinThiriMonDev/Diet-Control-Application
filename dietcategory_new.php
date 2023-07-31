<html>
<head>
<title>New Diet Category</title>
<link rel="stylesheet" href="admin/css/style.css">
</head>
<body>
<h1>New Diet Category</h1>
<?php include("admin/confs/authorize.php");?>

<ul class="menu">
 <li><a href="dietplan-list.php">Manage Diet Plan</a></li>
 <li><a href="dietcategory_list.php">Manage Diet Category</a></li>
 <li><a href="orders.php">Manage Orders</a></li>
 <li><a href="logout.php">Logout</a></li>
 </ul>

<form action="dietcategory_add.php" method="post">
<label for="categoryname">Diet Category Name</label>
<input type="text" name="categoryname">


<br><br>
<input type="submit" name="insert" value="Add Diet Category">
</form>

</body>
</html>
