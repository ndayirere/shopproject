<?php

session_start();

include "db.php";

if(isset($_POST["category"])){
   $category_query = "SELECT * FROM categories";
   $run_query = mysqli_query($con, $category_query);
   echo "
   <nav id='menuFixed' class='menu -flyout' >
         <a class='navAllCat'>
            <i class='fa fa-bars' onMouseOver='onhovercat(this)' ></i>
         </a>
   ";
   if(mysqli_num_rows($run_query)>0){
     while($row = mysqli_fetch_array($run_query)){
       $cid = $row["cat_id"];
       $cat_name = $row["cat_title"];
       $icon = $row["icon"];
     }
     echo "
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

      $varia .= "<li style='font-size:12px;'><a href='#'>$brand_name</a></li>";
    }
  }
  echo $varia;
}

if(isset($_POST["product"])){
   $product_query = "SELECT * FROM products ORDER BY RAND() LIMIT 0,12";
   $run_query = mysqli_query($con, $product_query);
   echo "
   <div class='city_deals'>
        <ul id='all_category_deals' class='user-city-deals'>
   ";
   if(mysqli_num_rows($run_query)>0){
     while($row = mysqli_fetch_array($run_query)){
       $prod_id = $row["product_id"];
       $prod_cat = $row["product_cat"];
       $prod_brand = $row["product_brand"];
       $prod_title = $row["product_title"];
       $prod_price = $row["product_price"];
       $prod_image = $row["product_image"];

       echo "
               <li class='deal-box tagged pull-left relative'>
                  <div class='imageBlock relative text-center'>
                    <div class='image'>
                      <a class='overflow-hidden text-center valign-middle'  href='#'>
                         <div class='new-deal-banner absolute'></div>
                         <img src='imgs/$prod_image' width='150px';height='170px';>
                         <div class='middle'>
                             <div class='texte'>J'achete</div>
                         </div>
                      </a>
                    </div>
                  </div>
                  <div class='bottom-block relative'>
                    <a class='bottom-block-link' href='#'>
                      <h3 class='title normal'>$prod_title</h3>
                      <div class='row-1 pull-left width-full relative'>
                         <div class='price-block'>
                            <div>
                               <span class='from_text'>A partir de</span>
                               <span class='discounted-price pull-left bold'>$prod_price FBU</span>
                            </div>
                         </div>
                      </div>
                    </a>
                  </div>
                  <div class='top-deal-tag'></div>
               </li>
            </ul>
       ";
     }
     echo "
        </div>
      ";

   }
}


?>
