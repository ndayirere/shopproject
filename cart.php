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
     <?php include "header.php"?>
       <div class="osh-container">
         <div class=" osh-msg-box -success">
           Votre panier a été mis à jour
           <div></div>
         </div>
       </div>
       <div class="container mb-4" style="">
     <div class="row">
         <div class="col-12">
             <div class="table-responsive">
                 <table class="table table-striped">
                     <thead>
                         <tr>
                             <th scope="col"></th>
                             <th scope="col">ARTICLE</th>
                             <th scope="col">DISPONIBLE</th>
                             <th scope="col" class="text-center">QUANTITE</th>
                             <th scope="col" class="text-right">PRIX UNITAIRE</th>
                             <th scope="col" class="text-right">SOUS-TOTAL</th>
                             <th> </th>
                         </tr>
                     </thead>
                     <tbody>
                       <?php

                       if(isset($_SESSION['cart'])){

                         foreach ($_SESSION['cart'] as  $value) {

                           $proId = $value['id'];
                           $name = $value['name'];
                           $img = $value['image'];
                           $prix = $value['price'];

                       ?>
                         <tr>
                             <td><img src="imgs/<?php echo $img?>" width="60px" height="60px"/> </td>
                             <td><?php echo $name?></td>
                             <td>Dans le stock</td>
                             <td><input class="form-control" style="width:70px;float:right;margin-right:150px;" type="text" value="1" /></td>
                             <td class="text-right"><?php echo $prix?></td>
                             <td class="text-right"><?php echo $prix?></td>
                             <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                         </tr>
                         <?php

                            }
                          }

                         ?>
                         <tr>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td><strong>TOTAL</strong></td>
                             <td class="text-right"><strong>346,90 €</strong></td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
         <div class="col mb-2">
             <div class="row">
                 <div class="col-sm-12  col-md-6">
                     <button class="btn btn-block btn-light" style="font-weight: 700;color:black;background-color: #dcdcdc;border-color: #dcdcdc;border-top-color: rgb(220, 220, 220);border-right-color: rgb(220, 220, 220);border-bottom-color: rgb(220, 220, 220);border-left-color: rgb(220, 220, 220);">POURSUIVRE MES ACHATS</button>
                 </div>
                 <div class="col-sm-12 col-md-6 text-right">
                   <a href="custom_regi_log.php">
                     <button class="btn btn-lg btn-block btn-success text-uppercase" style="background-color:#6076a0;border-color:#6076a0;">PASSER MA COMMANDE</button>
                   </a>
                 </div>
             </div>
         </div>
     </div>
 </div>
     <?php include "footer.php"?>
  </body>
</html>
