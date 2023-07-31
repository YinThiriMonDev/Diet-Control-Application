<?php
include("admin/confs/authorize.php");
?>

<!doctype html>
<html>
<head>
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
  include("admin/confs/dbconnect.php");
  $orders= $conn->query("SELECT * FROM orders");
?>

<ul class="orders">
  <?php while($order=$orders->fetch(PDO::FETCH_ASSOC))
  { 
    ?>
      <?php if($order['order_status']):?>
      <li class="delivered">
      <?php else: ?>
     <li>
      <?php endif; ?>

     <div class="order">
         <b><?php echo $order['cust_name']?></b>
         <i><?php  echo $order['cust_email']?></i>
         <span><?php echo $order['cust_phoneno']?></span>
         <p><?php echo $order['cust_address']?></p>
         <?php if($order['order_status']): ?>
<a href="order-status.php?id=<?php echo $order['id'] ?> &status=0">
            Undo</a>
         <?php else: ?>
            <a href="order-status.php?id=<?php echo $order['id'] ?>&status=1">
            Mark as delivered</a>
            <?php  endif; ?>
         </div>
         <div class="items">
           <?php 
               $order_id=$order['id'];
               $items= $conn->query("SELECT order_history.*, mealplan.recipe FROM order_history
                   LEFT JOIN mealplan ON order_history.mealplan_id=mealplan.id WHERE order_history.order_id=$order_id");

             while($item=$items->fetch(PDO::FETCH_ASSOC)){
               ?>
             <b>
               <?php  echo $item['recipe'] ?>
               ( <?php  echo $item['qty']?>)
            </b>

            <?php }?>
         </div>
         </li>
         <?php }?>
</ul>
</body>
</html>