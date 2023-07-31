<?php
include("admin/confs/authorize.php");
include("admin/confs/dbconnect.php");

$id=$_POST['id'];
$recipe=$_POST['recipe'];
$price=$_POST['price'];
$description=$_POST['description'];
$categoryid=$_POST['categoryid'];
$portrait=$_FILES['portrait']['name'];
$tmp=$_FILES['portrait']['tmp_name'];

if($cover)
{
    move_uploaded_file($tmp, "admin/portrait/$portrait");
    $sql="UPDATE mealplan SET recipe='$recipe', price='$price', description='$description',
          categoryid='$categoryid', portrait='$portrait', authorized_date=now() WHERE id=$id";
}

else {
    $sql="UPDATE mealplan SET recipe='$recipe', price='$price', description='$description',
         categoryid='$categoryid', portrait='$portrait', authorized_date=now() WHERE id=$id";
}

$conn->query($sql);
header("location:dietplan-list.php");
?>