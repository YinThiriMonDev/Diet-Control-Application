<?php
include("admin/confs/authorize.php");
include("admin/confs/dbconnect.php");

$id=$_POST['id'];
$categoryname= $_POST['categoryname'];

$stmt=$conn->prepare("UPDATE mealcategory SET categoryname='$categoryname' WHERE id=$id");
$stmt->execute();

header("location:dietcategory_list.php");
?>
