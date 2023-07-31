<html>
<head>
<title>Edit Diet Plan</title>
<link rel="stylesheet" href="admin/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php 
include("admin/confs/authorize.php");
include("admin/confs/dbconnect.php");
$id=$_GET['id'];
$result=$conn->prepare("SELECT * FROM mealplan WHERE id=$id");
$result->execute();
$row=$result->fetch(PDO::FETCH_ASSOC);
?>
<h1>Edit Diet Plan</h1>
<form action="dietplan-update.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $row['id']?>">
<label for="recipe">Type Recipe</label>
<input type="text" name="recipe" id="recipe" value="<?php echo $row['recipe']?>">
<label for="price">Diet Price</label>
<input type="text" name="price" id="price" value="<?php echo $row['price']?>">
<label for="description">Description</label>
<input type="text" name="description" id="description" value="<?php echo $row['description']?>">
<label for="categoryid">Categoryid</label>
<select name="categoryid" id="categoryid">
<option value="0">----Choose----</option> 	
<?php
    $stmt=$conn->prepare("SELECT id,categoryname FROM mealcategory");
    $stmt->execute();
    while($category=$stmt->fetch(PDO::FETCH_ASSOC))
    {
?>
     <option value="<?php echo $category['id']?>"
     <?php if($category['id']==$row['categoryid']) echo "selected"?>>
     <?php echo $category['categoryname']?>
     </option>
 <?php 
 }
 ?>
</select>
<br><br>

<img src="admin/portrait/<?php echo $row['portrait']?>" alt="" height="150">
<label for="portrait">Change Cover</label>
<input type="file" name="portrait" id="portrait">
<br><br>
<input type="submit" name="new" value="Update Diet Plan">
<a href="dietplan-list.php">Back</a>
</form>
</body>
</html>