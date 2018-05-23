<?php

session_start();
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

include "db.php";

 if(isset($_POST["addToCart"])){
   $p_id = $_POST["prodId"];
   $sql = "SELECT * FROM cart WHERE p_id='$p_id'";
   $run_query = mysqli_query($con,$sql);
   $count = mysqli_num_rows($run_query);
   if($count > 0){
      echo "
       <div class='alert alert-danger'>
           <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
           <b>Product is already added into the cart,Continue Shopping...!</b>
       </div>
      ";
   }else{
      $sql = "SELECT * FROM products WHERE product_id = '$p_id'";
      $run_query = mysqli_query($con,$sql);
      $row =  mysqli_fetch_array($run_query);
          $id = $row["product_id"];
          $pro_name = $row["product_title"];
          $pro_image = $row["product_image"];
          $pro_price = $row["product_price"];
          $pro_array = array ('id' => $id, 'name' => $pro_name, 'image' => $pro_image, 'price' => $pro_price);
        
          array_push($_SESSION['cart'] , $pro_array);
      echo '<pre>';
       print_r($_SESSION['cart']);
      echo  '</pre>';


   }
 }


 ?>
