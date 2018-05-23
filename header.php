<?php
include "db.php"

?>

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
                       <a class="osh-btn -plain -cart " href="cart.php">
                          <i class="fa fa-shopping-cart"></i>
                          <span class="bagde lab" style="">0</span>
                          <span class="sub-label">Panier</span>
                       </a>
                    </div>
                    <div id="account" class="osh-dropdown -plain -popover">
                        <div class="toggle">
                            <a class="osh-btn -plain defaultCursor" href="#">
                              <span class="label js-store" style="color:#555;font-size:15px;margin-left:-10px;margin-top:5px"><?php if(isset($_SESSION["name"])){echo"Bonjour";}else{echo "Votre";}?></span>
                              <span class="sub-label js-store"><?php if(isset($_SESSION["name"])){echo $_SESSION["name"];}else{echo "Compte";}?></span>
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
                   <input style="width:550px;" id="search-box" class="field js-store" placeholder="Chercher un produit, une marque ou une catégorie...">
                   <div id="suggesstion-box"></div>
                </div>
             </div>
          </div>
      </header>
  </div>
