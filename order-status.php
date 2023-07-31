<?php
include("admin/confs/dbconnect.php");
$id=$_GET['id'];
$order_status=$_GET['status'];

$sql=$conn->query("UPDATE orders SET order_status=$order_status, authorized_date=now() WHERE id=$id ");
?>
