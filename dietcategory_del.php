<?php
include("admin/confs/authorize.php");
include ("admin/confs/dbconnect.php");

$id=$_GET['id'];
$stmt=$conn->prepare("DELETE FROM mealcategory where id=$id");
$stmt->execute();

header("location:dietcategory_list.php");
?>``