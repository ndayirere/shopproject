<?php
session_start();
include "db.php";

$f_name = $_POST["f_name"];
$l_name = $_POST["l_name"];
$email = $_POST["email"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];
$mobile = $_POST["mobile"];
$adress = $_POST["adress"];
$name = "/^[A-Z][a-zA-Z ]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";

if(empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) || empty($mobile) || empty($adress)){

   echo "
   <div class='alert alert-warning' style='margin-top:10px;'>
       <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
       <b>Completer tous les champs SVP! </b>
   </div>
   ";
   exit();
}else{
  if(!preg_match($name,$f_name)){
    echo "
    <div class='alert alert-warning' style='margin-top:10px;'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Ce $f_name n'est pas valide </b>
    </div>
    ";
    exit();
  }
  if(!preg_match($name,$l_name)){
    echo "
    <div class='alert alert-warning' style='margin-top:10px;'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Ce $l_name n'est pas valide </b>
    </div>
    ";
    exit();
  }
  if(!preg_match($emailValidation,$email)){
    echo "
    <div class='alert alert-warning' style='margin-top:10px;'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Ce $email adresse n'est pas valide </b>
    </div>
    ";
    exit();
  }
  if(strlen($password) < 9){
    echo "
    <div class='alert alert-warning' style='margin-top:10px;'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Ce mot de passe est court </b>
    </div>
    ";
    exit();
  }
  if(strlen($repassword) < 9){
    echo "
    <div class='alert alert-warning' style='margin-top:10px;'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Ce mot de passe est court </b>
    </div>
    ";
    exit();
  }
  if($password != $repassword){
    echo "
    <div class='alert alert-warning' style='margin-top:10px;'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Ce mot de passe n'est le meme</b>
    </div>
    ";
  }
  if(!preg_match($number,$mobile)){
    echo "
    <div class='alert alert-warning' style='margin-top:10px;'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Le numero de telephone $mobile n'est pas valide</b>
    </div>
    ";
    exit();
  }

  $sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1";
  $check_query = mysqli_query($con,$sql);
  $count_email = mysqli_num_rows($check_query);
  if($count_email > 0){
    echo "
    <div class='alert alert-warning' style='margin-top:10px;'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Cet email adresse existe deja,reessayer un autre email</b>
    </div>
    ";
    exit();
  }else{
    $password = md5($password);
    $_SESSION["name"] = $f_name;
    $_SESSION["password"] = $password;
    $sql = "INSERT INTO
    `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `adress1`) VALUES
    (NULL, '$f_name', '$l_name', '$email', '$password', '$mobile', '$adress')";
    $run_query = mysqli_query($con,$sql);
    if($run_query){
      echo "
      <div class='alert alert-success' style='margin-top:10px;'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <b>Enregistrement avec succes!</b>
      </div>
    ";


    }
    
  }
}


?>
