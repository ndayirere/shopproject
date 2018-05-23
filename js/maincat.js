$(document).ready(function(){
    cat();
    product();

    function cat(){
       $.ajax({
           url :  "actioncat.php",
           method:"POST",
           data:  {category:1},
           success:function(data){
               $("#get_category").html(data);
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

})

function onhovercat(variabl){

  //var id = $(varia).attr('cid');
  //alert("ok");
  $.ajax({
      url :  "actioncat.php",
      method:"POST",
      data:  {cat:1},
      success:function(data){
          $("#get_brand").html(data);
      }
  })
};

function onhover(varia){

  var id = $(varia).attr('cid');
  //alert(id);
  $.ajax({
      url :  "actioncat.php",
      method:"POST",
      data:  {cat_id:id},
      success:function(data){
          $("#get_brand").html(data);
      }
  })
};
