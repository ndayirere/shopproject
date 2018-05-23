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
        <script src="js/mainaccount.js"></script>
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
     <div id="signup_msg" class="osh-container">
     </div>
     <main id="content" class="osh-container">
       <div class="l-pageWrapper">
         <div class="l-main">
         <div id="createAccount" class="line">
           <div class="unit size1of1">
             <div class="boxe box-bdr box-bgcolor">
               <h1 class="mbl ui-borderBottom pbs mam">Créer un nouveau compte client</h1>
               <div class="box-bd">
                 <div class="unit size3of3left -pull-left"></div>
                 <form id="form-account-create" action="#" method="post">
                   <fieldset class="ui-fieldset size4of5">
                     <div class="unit size2of3">
                       <div class="ui-formRow">
                         <div class="col1 -pull-left -align-right">
                           <label class="required">
                             Prénom
                             <span class="required">*</span>
                           </label>
                         </div>
                         <div class="col2 -pull-right">
                           <div class="collection">
                             <input id="f_name" name="f_name" class="osh-input" maxlength="50" type="text">
                           </div>
                         </div>
                       </div>
                       <div class="ui-formRow">
                         <div class="col1 -pull-left -align-right">
                           <label class="required">
                             Nom
                             <span class="required">*</span>
                           </label>
                         </div>
                         <div class="col2 -pull-right">
                           <div class="collection">
                             <input id="l_name"  name="l_name" class="osh-input" maxlength="50" type="text">
                           </div>
                         </div>
                       </div>
                       <div class="ui-formRow">
                         <div class="col1 -pull-left -align-right">
                           <label class="required">
                             Email
                             <span class="required">*</span>
                           </label>
                         </div>
                         <div class="col2 -pull-right">
                           <div class="collection">
                             <input id="email"  name="email" class="osh-input" maxlength="50" type="email">
                           </div>
                         </div>
                       </div>
                       <div class="ui-formRow">
                         <div class="col1 -pull-left -align-right">
                           <label class="required">
                             Mot de passe
                             <span class="required">*</span>
                           </label>
                         </div>
                         <div class="col2 -pull-right">
                           <div class="collection">
                             <input id="password" name="password" class="osh-input" maxlength="50" type="password">
                           </div>
                         </div>
                       </div>
                       <div class="ui-formRow">
                         <div class="col1 -pull-left -align-right">
                           <label class="required">
                             Retaper le mot de passe
                             <span class="required">*</span>
                           </label>
                         </div>
                         <div class="col2 -pull-right">
                           <div class="collection">
                             <input id="repassword" name="repassword" class="osh-input" maxlength="50" type="password">
                           </div>
                         </div>
                       </div>
                       <div class="ui-formRow">
                         <div class="col1 -pull-left -align-right">
                           <label class="required">
                             Telephone
                             <span class="required">*</span>
                           </label>
                         </div>
                         <div class="col2 -pull-right">
                           <div class="collection">
                             <input id="mobile" name="mobile" class="osh-input" maxlength="50" type="text">
                           </div>
                         </div>
                       </div>
                       <div class="ui-formRow">
                         <div class="col1 -pull-left -align-right">
                           <label class="required">
                             Adresse
                             <span class="required">*</span>
                           </label>
                         </div>
                         <div class="col2 -pull-right">
                           <div class="collection">
                             <input id="adress" name="adress" class="osh-input" maxlength="50" type="text">
                           </div>
                         </div>
                       </div>
                       <div class="ui-formRow">
                         <div class="col1 -pull-left">
                         </div>
                         <div class="col2 -pull-right">
                           <button  id="signup_button"  name="signup_button" class="osh-btn -primary sel-new-account-submit-button" type="submit">
                             <span>Soumettre</span>
                           </button>
                         </div>
                       </div>
                     </div>
                   </fieldset>
                 </form>
               </div>
             </div>
           </div>
         </div>
         </div>
       </div>
     </main>
     <?php include "footer.php"?>
   </body>
 </html>
