<?php
include("admin/confs/authorize.php");
include("admin/confs/dbconnect.php");

if(isset($_POST['insert']))
{
    $categoryname=$_POST['categoryname'];
    $sql="INSERT INTO mealcategory (categoryname,launched_date,authorized_date)
            VALUES('$categoryname',now(),now())";
    $conn->query($sql);
    
    header("location:dietcategory_list.php");
}