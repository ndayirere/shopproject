$(document).ready(function(){

    $(window).scroll(function(){
          posScroll = $(document).scrollTop();
          if(posScroll >=69)
            $('.menu-items').slideUp(450);
        else
            $('.menu-items').slideDown(450);
      });

      var myIndex = 0;
      carousel();

      function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}
          x[myIndex-1].style.display = "block";
          setTimeout(carousel, 6000);
      }


})

function onhover(varia){
  var id = $(varia).attr('pid');
  $.ajax({
      url :  "actionprod.php",
      method:"POST",
      data:  {addToCart:1,prodId:id},
      success:function(data){
         $("#product_msg").html(data);
      }
  })
};
