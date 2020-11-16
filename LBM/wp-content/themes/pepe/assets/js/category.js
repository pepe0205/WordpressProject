$(document).ready(function(){
  //  $(".main-menu a").before("<span class='img-icon'><i class='icon-main-menu-cellphone lv1-icon tikicon'></i></span>");
  // $(".sub-menu").addclass("bgEYwg")
 $(".cOJYFK").hover(function(){
                $(this).attr('style','background-color: rgb(100 ,180 ,255) !important');
               $(this).children('').css("color","white");
              $(this).children('.bgEYwg').css("display","block");
                
             },function(){
                $(this).css("background-color", "white");
                $(this).children('').css("color","rgb(68, 68, 68)");
                $(this).children('.bgEYwg').css("display","none");       
            });
       
      


});
          
