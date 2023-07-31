<?php
include("admin/confs/authorize.php");
include("admin/confs/dbconnect.php");

$recipe= $_POST['recipe']; // phone new ka name nat tuu ya ml
$price=$_POST['price'];
$description=$_POST['description'];
$categoryid=$_POST['categoryid'];
$portrait=$_FILES['portrait']['name'];
$tmp=$_FILES['portrait']['tmp_name']; // change kwint ma shi //file upload lote phot
if($portrait){
    move_uploaded_file($tmp, "admin/portrait/$portrait"); //file htae payy tr
}

$sql="INSERT INTO mealplan(recipe,price,description,categoryid,portrait,launched_date,authorized_date)
 	VALUES('$recipe','$price','$description','$categoryid','$portrait',now(),now())"; //database htl ko htae tr database name nat tuu ya ml // value ka htae mae hr twy thu ka a paw mhr kyay nyar tae variable twy

$conn->query($sql);

header("location:dietplan-list.php");


?>