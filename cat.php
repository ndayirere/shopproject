<?php
include "db.php";

if(isset($_GET["cid"])){
  $id = $_GET["cid"];
  $sql = "SELECT categories.cat_title,categories.banner FROM categories INNER JOIN products ON categories.cat_id = products.product_cat WHERE categories.cat_id =  '$id '";

  $run_query = mysqli_query($con, $sql);
  while($row = mysqli_fetch_array($run_query)){
    $cat = $row["cat_title"];
    $banner = $row["banner"];
  }
}


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
        <script src="js/maincat.js"></script>
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
    <div class="page-wrap">
      <div id="mainheader">
         <div class="mainheader" style="">
             <div class="mcontainer">
                <ul class="headeruser">
                   <li>
                     <span><i class="fa fa-credit-card" aria-hidden="true"></i> Paiement en cash</span>
                   </li>
                   <li>
                     <span><i class="fa fa-refresh"></i> Retour gratuits</span>
                   </li>
                   <li>
                       <span><i class="fa fa-truck"></i> Livraison gratuite</span>
                   </li>
                </ul>
                <ul class="headerlogo">
                   <li class="logo"><span><i class="fa fa-facebook-square"></i></span></li>
                   <li class="logo"><span><i class="fa fa-google-plus-square"></i></li>
                   <li class="logo"><span><i class="fa fa-twitter-square"></i></li>
                   <li class="logo"><span><i class="fa fa-youtube-square"></i></li>
                </ul>
                  <a href="#" target="_blank" style="background: #6076a0;padding-left: 4px;padding-right: 4px;padding-top: 2px;padding-bottom: 2px;border-radius: 3px;font-size: 13px;color: white;font-weight: 500;margin-right: 1px;text-decoration: none;right: 200px;top: 5px;position: absolute">Vendez sur SmartBoy</a>
                <div class="headerlang">
                   <span class="headerlangcurrent">
                     Francais
                     <i class="caret caret-down"></i>
                     <i class="osh-icon -FR"></i>
                   </span>
                   <ul class="osh-lang-list" style="display:none;">
                      <li class="item">
                         <a href="#">
                           Kirundi
                           <i class="osh-icon -BDI"></i>
                         </a>
                      </li>
                      <li class="item">
                         <a href="#">
                           Francais
                           <i class="osh-icon -FR"></i>
                         </a>
                      </li>
                   </ul>
                </div>
             </div>
         </div>
      </div>
      <div class="sticky-placeholder" data-spy="affix" data-offset-top="197">
          <header class="header-main-wrapper js-sticky-header">
              <div class="osh-container header-main">
                <nav  class="menu -flyout" id="get_category">
                      <ul id="get_brand" class='dropdown-menu' role='menu'>
                      </ul>
                </nav>
            <!--<nav id="menuFixed" class="menu -flyout">
                    <a class="navAllCat" href="#">
                       <i class="fa fa-bars"></i>
                    </a>
                  <ul class="menu-items" style="display: block;top:58px;">
                       <div class="arrow-border">
                       </div>
                       <li><a class="active" href="#"><span>CATEGORIES</span></a></li>
                       <li><i class="fa fa-laptop"></i><a href="#"><span>ELECTRONIQUES</span></a></li>
                       <li><i class="fa fa-female"></i><a href="#"><span>VETEMENTS FEMMES</span></a></li>
                       <li><i class="fa fa-male"></i><a href="#"><span>VETEMENTS HOMMES</span></a></li>
                       <li><i class="fa fa-child"></i><a href="#"><span>VETEMENTS ENFANTS</span></a></li>
                       <li><a href="#"><span>MEUBLES</span></a></li>
                       <li><a href="#"><span>ELECTROMENAGERS</span></a></li>
                       <li><a href="#"><span>GADGETS ELECTRONIQUES</span></a></li>
                    </ul>
                 </nav>-->
                 <div class="logo" style="visibility: visible;">
                    <a href="#"><img src="imgs/logo7.png"></a>
                 </div>
                 <div class="actions">
                    <div id="cart" class="osh-dropdown -plain -cart -jewel -default">
                        <div class="toggle">
                           <a class="osh-btn -plain -cart -jewel" href="#">
                              <i class="fa fa-shopping-cart"></i>
                              <span class="sub-label">Panier</span>
                           </a>
                        </div>
                        <div id="account" class="osh-dropdown -plain -popover">
                            <div class="toggle">
                                <a class="osh-btn -plain defaultCursor" href="#">
                                  <span class="label js-store" style="color:#555;font-size:15px;margin-left:-25px;margin-top:5px">Votre</span>
                                  <span class="sub-label js-store">compte</span>
                                  <i class="fai fa fa-angle-down"></i>
                                </a>
                            </div>
                        </div>
                        <div id="help" class="osh-dropdown -plain defaultCursor -popover">
                           <div class="toggle">
                              <button class="osh-btn -plain defaultCursor">
                                  <span class="label" style="color:#555;font-size:15px;margin-left:-9px;margin-top:-2px">Besoin</span>
                                  <span class="sub-label">d'aide</span>
                                  <i class="fai fa fa-angle-down"></i>
                              </button>
                           </div>
                        </div>
                    </div>
                 </div>
                 <div class="osh-search-bar">
                   <button class="btn btn-defaul SearchButton osh-btn -primary action" type="button">
                      <span class=" glyphicon glyphicon-search SearchIcon" ></span>
                   </button>
                    <div class="field-panel">
                       <input id="header-search-input" class="field js-store" placeholder="Chercher un produit, une marque ou une catégorie...">
                    </div>
                 </div>
              </div>
          </header>
      </div>
      <div class="slideshow-container">
         <div class="card-banners">
            <div class="card-desktop -text">
               <div class="characteristic">
                  <a href="#">
                    <div class="iconography">
                       <i class="fa fa-credit-card" aria-hidden="true" style="font-size:20px;position:relative;left:1050px;top:-350px;"></i>
                    </div>
                    <div class="description" style="position:relative;left:1050px;top:-350px;">
                      <span class="title" title="Paiement en cash">Paiement en cash</span>
                      <span class="text" title="à la livraison">à la livraison</span>
                    </div>
                  </a>
               </div>
               <div class="characteristic">
                 <a href="#">
                   <div class="iconography">
                      <i class="fa fa-refresh" style="font-size:20px;position:relative;left:1050px;top:-350px;"></i>
                   </div>
                   <div class="description" style="position:relative;left:1050px;top:-350px;">
                     <span class="title" title="Retour gratuits">Retour gratuits</span>
                     <span class="text" title="sous conditions  ">sous conditions</span>
                   </div>
                 </a>
               </div>
               <div class="characteristic">
                 <a href="#">
                   <div class="iconography">
                      <i class="fa fa-truck" style="font-size:20px;position:relative;left:1050px;top:-350px;"></i>
                   </div>
                   <div class="description" style="position:relative;left:1050px;top:-350px;">
                     <span class="title" title="Livraison offerte">Livraison offerte</span>
                     <span class="text" title="sous conditions">sous conditions</span>
                   </div>
                 </a>
               </div>
            </div>
         </div>
      </div>
      <main class="osh-container" style="height:1400px;">
         <nav class="osh-breadcrumb">
            <ul>
               <li class=""><a href="#" style="font-size:13px;">Accueil</a>  <i style="font-size:13px;margin-top:-4px;margin-left:5px;" class="fa fa-angle-right"></i></li>
               <li class="last-child" style="margin-top:-4px;"><a href="#" style="font-size:13px;"><?php echo $cat ?></a></li>
            </ul>
         </nav>
         <section class="osh-banner">
            <div id="containerCB" class="dy_unit dyother dyMonitor">
               <div class="col-wrap">
                  <div class="section group">
                    <div class="page-ttl-wrp" style="margin-top:-200px;">
                       <span class="page-ttl"><?php echo $cat ?><span>
                    </div>
                  </div>
               </div>
               <div class="col-wrap">
                  <div class="section group">
                    <div class="col_main span_main_01">
                      <h3 class="title mnav">meilleures marques</h3>
                      <ul class="catnav">
                        <?php
                        if(isset($_GET["cid"])){
                          $idb = $_GET["cid"];
                          $sql = "SELECT brands.* FROM brands INNER JOIN cat_brand ON cat_brand.brand_id = brands.brand_id INNER JOIN categories ON categories.cat_id = cat_brand.cat_id WHERE categories.cat_id = '$idb'";
                          $run_query = mysqli_query($con, $sql);
                          while($row = mysqli_fetch_array($run_query)){
                            $bid = $row["brand_id"];
                            $brand_name = $row["brand_title"];
                        ?>
                        <li><a class="listlink" href="#"><?php echo $brand_name?></a></li>
                        <?php
                          }
                        }
                        ?>
                      </ul>
                    </div>
                    <div class="col_main span_main_02 pull-right">
                        <div id="" class="main-slideshow">
                           <div style="position: absolute;">
                              <div style="margin-top:0px;margin-left:-210px;">
                                  <a href="#"><img src="imgs/<?php echo $banner?>"></a>
                              </div>
                           </div>
                        </div>
                    </div>
                  </div>
               </div>
            </div>
         </section>
         <aside class="osh-sidebar -left" style="min-height: 1300px;">
            <section class="osh-filters -vertical ft-vertical-filters">
               <section class="osh-category-tree">
                 <div class="osh-category-root">Marques</div>
                 <ul class="osh-subcategories">
                   <?php
                   if(isset($_GET["cid"])){
                     $idp = $_GET["cid"];
                     $sql = "SELECT COUNT(*),brands.brand_title FROM brands INNER JOIN products ON products.product_brand = brands.brand_id INNER JOIN cat_brand ON cat_brand.brand_id = brands.brand_id INNER JOIN categories ON categories.cat_id = cat_brand.cat_id WHERE categories.cat_id = '$idp' GROUP BY brands.brand_title";
                     $run_query = mysqli_query($con, $sql);
                     while($row = mysqli_fetch_array($run_query)){
                       $bid = $row["brand_id"];
                       $brand_name = $row["brand_title"];
                       $count = $row["COUNT(*)"];
                   ?>
                   <li class="osh-subcategories">
                     <a href="#">
                       <i class="fa fa-angle-right"></i>
                       <span class="-name"><?php echo $brand_name?></span>
                       <span class="-total">(<?php echo $count?>)</span>
                     </a>
                   </li>
                   <?php
                       }
                     }
                   ?>
                 </ul>
               </section>
            </section>
         </aside>
         <section class="osh-content" style="margin-top:-1100px;">
            <section class="products -mabaya" style="">
              <?php
              if(isset($_GET["cid"])){
                $id = $_GET["cid"];
                $sql = "SELECT * FROM products WHERE product_cat = '$id '";

                $run_query = mysqli_query($con, $sql);
                while($row = mysqli_fetch_array($run_query)){
                  $prod_id = $row["product_id"];
                  $prod_cat = $row["product_cat"];
                  $prod_brand = $row["product_brand"];
                  $prod_title = $row["product_title"];
                  $prod_price = $row["product_price"];
                  $prod_image = $row["product_image"];
              ?>

              <div id="get_product" class="sku -gallery -has-offers">
                 <a class="link" href="#">
                   <div class="image-wrapper default-state">
                     <img class="lazy image -loaded" src="imgs/<?php echo $prod_image ?>">
                   </div>
                   <h2 class="title" style="margin-top:-140px;">
                     <span class="brand"><?php echo $prod_title ?></span>
                     <span class="name">F5 - 4G/Dual SIM - 32Go - 4Go - Noir</span>
                   </h2>
                   <div class="price-container clearfix">
                     <span class="price-box ri">
                       <span class="price">
                         <span><?php echo $prod_price ?> FBU</span>
                       </span>
                     </span>
                   </div>
                 </a>
               </div>
              <?php
               }
              }
              ?>
            </section>
         </section>
      </main>
      <footer>
          <div class="osh-footer-resources">
             <div class="osh-container">
                <div class="osh-footer-resources-app" style="position:relative; top:-50px; left:38px;">
                     <i class="fa fa-shopping-cart" style="position:relative; top:60px;left:-65px; font-size:40px;background-color:white;text-align: center;"></i>
                     <div class="osh-app-txtBlock">
                        <div class="title">
                            <span style="font-size:12px;">SmartBoy dans votre poche</span>
                        </div>
                        <span style="font-size:12px;">Téléchargez notre application et commandez à n'importe quel moment.</span>
                     </div>
                     <label>
                        Télécharger
                     </label>
                     <ul>
                       <li><a href="#"><i class="fa fa-apple" style="font-size:28px;"></i></a></li>
                       <li><a href="#"><i class="fa fa-android" style="font-size:28px;position:relative;left:-38px;"></i></a></li>
                     </ul>
                </div>
                <div class="osh-footer-resources-newsletter js-newsletter-subscription-footer">
                   <div class="osh-cms-container">
                      <div style="font-size: 14px; font-weight: 500; line-height: 1.1; margin: 0; padding: 0; color: #555;">
                         Inscrivez-vous à nos Communications
                      </div>
                      <div style="font-size: 12px; color: #555;">Et accédez aux meilleures offres du moment </div>
                      <span style="font-size: 9px; color: #555;">En validant, vous acceptez l'intégralité de nos
                         <a href="#">conditions générales d'utilisation</a>
                          et de confidentialité.
                      </span>
                   </div>
                   <div class="osh-newsletter-form  -both">
                      <div class="osh-email-options">
                         <input class="osh-input osh-newsletter-email js-store" placeholder="Votre adresse Email ici">
                         <span>
                            <button class="osh-btn -primary osh-newsletter-btn -male" name="" value="">
                                <span class="label">Homme</span>
                            </button>
                         </span>
                         <span>
                            <button class="osh-btn -primary osh-newsletter-btn -male" name="" value="">
                                <span class="label">Femme</span>
                            </button>
                         </span>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="main-footer">
             <div class="osh-container">
                <div class="line">
                   <div class="oshun-col-1of4">
                      <p class="footer-title">Service client</p>
                      <ul>
                         <li><a href="#">Aide & FAQ</a></li>
                         <li><a href="#">Contact</a></li>
                         <li><a href="#">Acheter sur SmartBoy</a></li>
                         <li><a href="#">Suivre votre commande</a></li>
                         <li><a href="#">Tarifs & options de livraison</a></li>
                         <li><a href="#">Politique de retour</a></li>
                      </ul>
                   </div>
                   <div class="oshun-col-1of4">
                     <p class="footer-title">à propos</p>
                     <ul>
                        <li><a href="#">Carrières</a></li>
                        <li><a href="#">Qui sommes-nous</a></li>
                        <li><a href="#">SmartBoy Express</a></li>
                        <li><a href="#">Conditions Générales d'Utilisation</a></li>
                        <li><a href="#">Politique de Confidentialité</a></li>
                     </ul>
                   </div>
                   <div class="oshun-col-1of4">
                     <p class="footer-title">Retrouvez-nous sur</p>
                     <ul>
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-google"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-youtube"></a></li>
                     </ul>
                     <br/>
                     <br/>
                     <br/>
                     <br/>
                     <p class="footer-title">Modes de paiement et livraison</p>
                     <ul>
                        <li><a href="#"><img src="imgs/payment_icon2.png" width="45px"  height="25px"></a></li>
                        <li><a href="#"><img src="imgs/ecocash.png" style="position:relative;top:-40px;left:60px;"></a></li>
                     </ul>
                   </div>
                </div>
                <div class="line">
                   <div class="copyright">
                        2018
                        <a href="#" style="color:#6076a0;">SmartBoy</a>
                        - tous droits réservés
                   </div>
                </div>
             </div>
          </div>
      </footer>
    </div>
</body>
</html>
