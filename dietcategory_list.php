<html>
<head><title>Category List</title></head>
<link rel="stylesheet" href="admin/css/style.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="admin/css/style.css?v=1">
<nav class="navbar navbar-expand-lg navbar-light" style="background-image: url(Images/Blue1.jpg);z-index:1200; width: 100%; height:20%; background-color:#B84656;">
  <a class="navbar-brand" href="#" ><img src="https://i.postimg.cc/SKG3NHv8/d6.jpg" style="width: 100px; height: 100px; border-radius: 50%; "></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="dietplan-list.php" style="font-family: Lucida Calligraphy; font-size: 18px;">Diet Plan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dietcategory_list.php" style="font-family: Lucida Calligraphy; font-size: 18px;">Diet Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="orders.php" style="font-family: Lucida Calligraphy; font-size: 18px;">Orders</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link enabled" href="logout.php" style="font-family: Lucida Calligraphy; font-size: 18px;">Logout</a>
      </li>

    </ul>
  </div>
</nav> 

<?php 
include("admin/confs/authorize.php");
include("admin/confs/dbconnect.php");

$stmt=$conn->query("SELECT * FROM mealcategory");?>

<ul>
<?php while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{?>
<li title="<?php echo $row['id']?>">
[<a href="dietcategory_del.php?id=<?php echo $row['id']?>">Del </a>]
[<a href="dietcategory_edit.php?id=<?php echo $row['id']?>">Edit </a>]
		<?php echo $row['categoryname'];?>
</li>
<?php } ?>
</ul>	

<a href="dietcategory_new.php" class="new">New Diet Category</a>
</body>
</html>
