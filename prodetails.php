<?php
session_start();

include "db.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Ndayisenga Regis">
        <title>SmartBoy | Home</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
        <script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="js/mainprodet.js"></script>
    </head>
    <style>
      .mySlides {display:none;}
      .affix {
          top: 0;
          width: 100%;
          z-index: 9999 !important;
          box-shadow: 5px 10px 15px #888888;
      }

      .affix + .mainbody {
          padding-top: 70px;
      }

    .dropdown:hover>.dropdown-menu{
      display:block;
      position: fixed;
      width: 783px;
      height: 353.5px;
      margin-left: 260px;
      margin-top: -562px;
    }

    .fafa {
     color: #808080;
     margin-left: 170px;
     margin-top: -8px;
    }
   </style>
<body>
      <?php include "header.php";?>
      <?php
      if(isset($_GET["pid"])){
         $prod_id = $_GET["pid"];
         $sql = "SELECT * FROM `products` INNER JOIN categories ON categories.cat_id = products.product_cat INNER JOIN brands ON brands.brand_id = products.product_brand WHERE product_id = '$prod_id'";
         $run_query = mysqli_query($con,$sql);
         while($row = mysqli_fetch_array($run_query)){
           $prod_id = $row["product_id"];
           $prod_title = $row["product_title"];
           $prod_price = $row["product_price"];
           $prod_image = $row["product_image"];
           $pro_desc = $row["product_desc"];
           $pro_cat = $row["cat_title"];
           $pro_br = $row["brand_title"];

       ?>
      <main class="osh-container">
         <nav class="osh-breadcrum" style="height:50px;margin-top:-5px;">
            <ul>
              <li class="acc" style="font-size:13px;"><a style="color: grey;background-color: transparent;text-decoration: none;" href="#">Accueil ></a></li>
              <li class="acc"  style="font-size:13px;"><a style="color: grey;background-color: transparent;text-decoration: none;" href="#"><?php echo $pro_cat?> ></a></li>
              <li class="acc"  style="font-size:13px;"><a style="color: grey;background-color: transparent;text-decoration: none;" href="#"><?php echo $pro_br?> ></a></li>
              <li class="last-child acc" style="font-size:13px;margin-top:-4px;"><a style="color: #202020;font-weight: 700;background-color: transparent;text-decoration: none;" href="#"><?php echo $prod_title?></a></li>
            </ul>
         </nav>
         <div class="container" style="margin-top:10px;">
           <div class="row">
             <div class="col-md-12" id="product_msg">
             </div>
           </div>
         </div>
         <section class="sku-detai">
           <div class="media">
             <div class="product-previe">
               <img width="408px" height="408px" src="imgs/<?php echo $prod_image?>" class="lazy -loade">
             </div>
           </div>
           <div class="details-wrappe">
             <div class="details -validate-siz">
               <span class="titl">
                 <h1><?php echo $prod_title?></h1>
               </span>
               <div class="detail-feature">
                 <div class="size">
                   <div class="list -size">
                     <div class="desc"><?php echo $pro_desc?></div>
                   </div>
                 </div>
               </div>
               <div class="details-foot">
                 <div class="price-box">
                   <div>
                     <span class="price">
                       <span class=""><?php echo $prod_price?></span>
                       <span class="">FBU</span>
                     </span>
                   </div>
                 </div>
                 <div class="actions">
                   <button  href="profile.php"  pid="<?php echo $prod_id ?>"  onclick='onhover(this)' id="prod" class="osh-bt -primary">
                     <span class="label">
                       J'achète
                     </span>
                   </button>
                 </div>
               </div>
             </div>
           </div>
         </section>
      </main>
      <?php
       }
      }
       ?>
      <?php include "footer.php";?>
</body>
</html>
