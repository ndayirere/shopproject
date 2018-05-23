$(document).ready(function(){

  $("#signup_button").click(function(event){
    event.preventDefault();
    $.ajax({
        url :  "register.php",
        method:"POST",
        data:  $("form").serialize(),
        success:function(data){
           $("#signup_msg").html(data);
           header("Location:cart.php");
        }
    })
  })

  $("#login").click(function(event){
      event.preventDefault();

  })

})
