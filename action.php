<?php

session_start();

include "db.php";

if(isset($_POST["category"])){
   $category_query = "SELECT * FROM categories";
   $run_query = mysqli_query($con, $category_query);
   echo "
   <nav id='menuFixed' class='menu -flyout' >
           <a class='navAllCat'>
              <i class='fa fa-bars'></i>
           </a>
         <ul class='menu-items' style='display: block;margin-top:-5px;'>
              <div class='arrow-border'>

              </div>
   ";
   if(mysqli_num_rows($run_query)>0){
     while($row = mysqli_fetch_array($run_query)){
       $cid = $row["cat_id"];
       $cat_name = $row["cat_title"];
       $icon = $row["icon"];

       echo "
          <li class='dropdown test'><img src='imgs/$icon' style='position:relative;top:20px;left:7px;'> <a class='catId' id='category' onMouseOver='onhover(this)'  href='cat.php?cid=$cid' cid='$cid'><span style='font-size:11px;'>$cat_name <i class='fafa fa fa-angle-right'></i></span></a>
                <ul id='get_brand' class='dropdown-menu' role='menu'>
                </ul>
          </li>
       ";
     }
     echo "
         </ul>
        </nav>
      ";

   }
}
if(isset($_POST["cat_id"])){
  $brand_query = "SELECT brands.* FROM brands INNER JOIN cat_brand ON cat_brand.brand_id = brands.brand_id INNER JOIN categories ON categories.cat_id = cat_brand.cat_id WHERE categories.cat_id = ".$_POST['cat_id']."";
  //echo $brand_query;
  $run_query = mysqli_query($con, $brand_query);
  if(mysqli_num_rows($run_query)>0){
    while($row = mysqli_fetch_array($run_query)){
      $bid = $row["brand_id"];
      $brand_name = $row["brand_title"];

      $varia .= "<li style='font-size:12px;margin-top:-5px;'><a href='brand.php?bid=$bid'>$brand_name</a></li>";
    }
  }
  echo $varia;
}

if(isset($_POST["product"])){
   $product_query = "SELECT * FROM products ORDER BY RAND() LIMIT 0,12";
   $run_query = mysqli_query($con, $product_query);
   echo "
   <section class='osh-content' style=''>
      <section class='products -mabaya' style='margin-top:110px;margin-left:-220px;padding-left:70px;'>
   ";
   if(mysqli_num_rows($run_query)>0){
     while($row = mysqli_fetch_array($run_query)){
       $prod_id = $row["product_id"];
       $prod_cat = $row["product_cat"];
       $prod_brand = $row["product_brand"];
       $prod_title = $row["product_title"];
       $prod_price = $row["product_price"];
       $prod_image = $row["product_image"];

       echo "  <div class='sku -gallery -has-offers  hoveff' style=''>
                 <a class='link' href='prodetails.php?pid=$prod_id' pid='$prod_id'>
                   <div class='image-wrapper default-state'>
                     <img  class='lazy image -loaded' src='imgs/$prod_image'>
                     <div class='middle'>
                         <div class='texte'>J'achete</div>
                     </div>
                   </div>
                   <h2 class='title' style='margin-top:-140px;'>
                     <span class='brand'>$prod_title</span>
                     <span class='name'>F5 - 4G/Dual SIM - 32Go - 4Go - Noir</span>
                   </h2>
                   <div class='price-container clearfix'>
                     <span class='price-box ri'>
                       <span class='price'>
                         <span>$prod_price  FBU</span>
                       </span>
                     </span>
                   </div>
                 </a>
               </div>
       ";
     }
     echo "
     </section>
  </section>
      ";

   }
}





if(!empty($_POST["keyword"])) {
   $query ="SELECT * FROM `products` INNER JOIN categories ON products.product_cat = categories.cat_id  WHERE product_keywords like '" . $_POST["keyword"] . "%' ORDER BY product_keywords";
   $run_query = mysqli_query($con, $query);
if(mysqli_num_rows($run_query)>0){

echo "
<div id='header-search-results' class='results visible' style='width:550px;'>
    <ul id='list' class='list'>
      <li class='suggester-categories'>
      <div class='header'>
         <span class='title' style='font-size:12px;'>
         CATEGORIES

   ";

while($row = mysqli_fetch_array($run_query)){
  $pid = $row["product_id"];
  $prod_name = $row["product_title"];
  $prod_price = $row["product_price"];
  $prod_descr = $row["product_desc"];
  $prod_img = $row["product_image"];
  $prod_key = $row["product_keywords"];
  $prod_cat = $row["cat_title"];
  $icon = $row["icon"];

echo "
<ul class='list'>
<li class='item'>
   <a href='#'>
     <span class='ssr'>
       <span class='searchTerm' onClick='selectCatBrPro($prod_name)'  style='font-size:12px;'>$prod_name</span>
       <span style='font-size:12px;color:black;'>dans</span>
       <span style='font-size:12px;font-weight: 900;'>$prod_cat</span>
     </span>
   </a>
</li>

<li class='products'>
   <ul class='list'>
     <li class='product item'>
       <a href='#'>
         <span class='product-image' style='padding-right:10px;width:60px;display: table-cell;'>
            <img style='width: 50px;max-width: 50px;max-height: 62px;' src='imgs/$prod_img'>
         </span>
         <span class='product-details' style='padding-top: 10px;display: table-cell;width: 99%;vertical-align: top;'>
           <span class='product-title' style='display: block;color: gray;direction: ltr;overflow: hidden;overflow-x: hidden;overflow-y: hidden; text-overflow: ellipsis; white-space: nowrap;'>
             <span style='float: left;padding-right: 5px;'>$prod_name</span>
             <span><em>$prod_name</em>$prod_descr</span>
           </span>
           <span class='product-price' style='color: #8E0617;'>$prod_price FBU</span>
         </span>
       </a>
     </li>
   </ul>
</li>
</ul>
";

  }

echo
"
     </span>
        </div>
     </li>
  </ul>
</div>
";
  }
}



 if(isset($_POST["addToCart"])){
   $p_id = $_POST["prodId"];
   echo  $p_id;
   $sql = "SELECT * FROM products WHERE product_id='$p_id'";
   $run_query = mysqli_query($con,$sql);
   $count = mysqli_num_rows($run_query);
   if($count > 0){
      echo "Product is already added into the cart,Continue Shopping...!";
   }else{
      $sql = "SELECT * FROM products WHERE product_id = '$p_id'";
      $run_query = mysqli_query($con,$sql);
      $row =  mysqli_fetch_array($run_query);
          $id = $row["product_id"];
          $pro_name = $row["product_title"];
          $pro_image = $row["product_image"];
          $pro_price = $row["product_price"];
      $sql = "INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`,
        `product_image`, `qty`, `price`, `total_amount`)
        VALUES (NULL, '$p_id', '0', '$user_id', '$pro_name', '$pro_image', '1', '$pro_price', '$pro_price')";
        if(mysqli_query($con,$sql)){
           echo "
               <div class='alert alert-success'>
                   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                   <b>Produit est ajoute..!</b>
               </div>
           ";
        }
   }
 }
?>
