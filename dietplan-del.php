<?php
include("admin/confs/authorize.php");
include ("admin/confs/dbconnect.php");

$id=$_GET['id'];
$stmt=$conn->prepare("DELETE FROM mealplan where id=$id");
$stmt->execute();

header("location:dietplan-list.php");
?>