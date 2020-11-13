$(document).ready(function(){
 $(".cOJYFK").hover(function(){
                $(this).attr('style','background-color: rgb(100 ,180 ,255) !important');
                $(this).children().css("color","white");
                $(this).children('div').css("display","block");
                
             },function(){
                $(this).css("background-color", "white");
                 $(this).children().css("color","black");
                 $(this).children('div').css("display","none");       
            });
       
       
         $(".dWoJRG").hover(function(){
            
                $(this).css("color","blue");
              
                
             },function(){
                $(this).css("color", "white");
                     
            });

});
          
