$(document).ready(function(){
    cat();
    product();

    function cat(){
       $.ajax({
           url :  "action.php",
           method:"POST",
           data:  {category:1},
           success:function(data){
               $("#get_category").html(data);
           }
       })
    }

    function product(){
       $.ajax({
           url :  "action.php",
           method:"POST",
           data:  {product:1},
           success:function(data){
               $("#get_product").html(data);
           }
       })
    }

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

      $("#search-box").keyup(function(){
      		$.ajax({
      		type: "POST",
      		url: "action.php",
      		data:'keyword='+$(this).val(),
      		beforeSend: function(){
      			$("#search-box").css("background","#FFF url(imgs/LoaderIcon.gif) no-repeat 165px");
      		},
      		success: function(data){
      			$("#suggesstion-box").show();
      			$("#suggesstion-box").html(data);
      			$("#search-box").css("background","#FFF");
      		}
      		});
    	});
      
})

function selectCatBrPro(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}

function onhover(varia){

  var id = $(varia).attr('cid');
  //alert(id);
  $.ajax({
      url :  "action.php",
      method:"POST",
      data:  {cat_id:id},
      success:function(data){
          $("#get_brand").html(data);
      }
  })
};
