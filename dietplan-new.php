<html>
<head>
<title>New Diet Plan</title>
<link rel="stylesheet" href="admin/css/style.css">

<style>
form label{
     display:block;
     margin-top:8px;
}
</style>
</head>
<body>
<h1>New Diet Plan</h1>

<ul class="menu">
 <li><a href="dietplan-list.php">Manage Diet Plan</a></li>
 <li><a href="dietcategory_list.php">Manage Diet Category</a></li>
 <li><a href="orders.php">Manage Orders</a></li>
 <li><a href="logout.php">Logout</a></li>
 </ul>

<form action="dietplan-add.php" method="post" enctype="multipart/form-data">

<label for="recipe">Plan Recipe</label>
<input type="text" name="recipe">

<label for="price">Plan Price</label>
<input type="text" name="price">

<label for="description">Description</label>
<input type="text" name="description">

<label for="categoryid">Category</label>
<select name="categoryid" id="category">
<option value="0">----Choose----</option>
<?php 
include("admin/confs/authorize.php");
    include("admin/confs/dbconnect.php");
    $stmt=$conn->query("SELECT id,categoryname FROM mealcategory");
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
?>

	<option value="<?php echo $row['id']?>">
	<?php echo $row['categoryname']?>
	</option>
	
	<?php 
    }
	?>
</select>
<br><br>
<label for="portrait">Portrait</label>
<input type="file" name="portrait">
<br><br>
<input type="submit" name="new" value="Add Diet Plan">

<a href="dietplan-list.php">Back</a>
</form>
</body>
</html>
