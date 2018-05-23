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
      <div class="osh-container">
      </div>
      <main id="content" class="osh-container">
        <div class="l-pageWrapper">
          <div class="l-main">
            <div class="line mbm" style="">
              <div class="unit size1of2" style="">
                <div class="box box-bdr box-bgcolor mrs myaccountLogin loginAccountModuleRight">
                  <h2 class="mll mrn mtm capitalize ptm">
                    Vous avez déjà un compte SmartBoy ? Connectez-vous !
                    <span class="ui-inlineBlock l-absolute"></span>
                  </h2>
                  <form id="form-account-login" action="" method="post">
                    <div class="clearfix loginForm mtl ptm">
                      <fieldset class="ui-fieldset">
                        <div class="ui-formRow">
                          <label class="mts mll col1 required">
                            E-mail
                            <span class="required">*</span>
                          </label>
                          <div class="collection col2">
                            <input id="LoginForm_email" name="LoginForm[email]" type="email">
                          </div>
                        </div>
                        <div class="ui-formRow">
                          <label class="mts mll col1 required">
                            Mot de passe
                            <span class="required">*</span>
                          </label>
                          <div class="collection col2">
                            <input id="LoginForm_password" class="js-password_field" name="LLoginForm[password]" maxlength="70" type="password">
                          </div>
                        </div>
                        <div class="ui-formRow">
                          <div class="collection col2">
                            <a id="forgotPasswordAnchor" class="mts ui-inlineBlock" href="#">
                              Mot de passe oublié ?
                            </a>
                          </div>
                        </div>
                        <div class="ui-formRow mbs">
                          <div class="col1"></div>
                          <div class="col2 mts">
                            <button id="login" class="ui-button ui-buttonCta ui-orange-button login-button" type="submit">
                              <span>Se connecter</span>
                            </button>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                  </form>
                </div>
              </div>
              <div class="unit size1of2 lastUnit">
                <div class="box box-bdr box-bgcolor mls myaccountLogin loginAccountModuleLeft">
                  <h2 class="mll mrn mtl capitalize">
                    Je suis un nouveau client
                    <span class="yui-inlineBlock l-absolute"><span>
                  </h2>
                  <div class="box-bd regpage-subtitle-newcustomer mlm">
                    <div class="txtCenter">
                      <p class="pbl">
                        Créez votre compte sur SmartBoy maintenant ! Rien de plus simple, il vous suffit de renseigner votre adresse mail et de suivre les étapes.
                      </p>
                      <a class="ui-button ui-buttonCta ui-orange-button sel-checkout-new-client mts sel-new-account-create-button" href="create_account.php">
                        <span>Créer mon compte</span>
                      </a>
                    </div>
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
