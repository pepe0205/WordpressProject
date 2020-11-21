
$(document).ready(function(){


 $(".dYkBsI").click(function(){
	  $('.ReactModal__Overlay--after-open').css('display','block');
          
	});
 $(".fIfNjl").click(function(){
	  $('.ReactModal__Overlay--after-open').css('display','none');
          
	});
 $(".cuMNQR").click(function(){
 	$('.sign').show();
	$('.login').hide();
	$('#dangnhap').hide();
	$('.bZfMdt h2').text("Tạo tài khoản");
	$('.bZfMdt p').text("Tạo tài khoản để theo dõi đơn hàng, lưu danh sách sản phẩm yêu thích, nhận nhiều ưu đãi hấp dẫn.");
	$('.cuMNQR').css({"border-bottom": "3px solid rgb(27, 168, 255)", "color": " rgb(27, 168, 255)"});
	$('.bCSujG').css({"border-bottom": "0px", "color": " rgb(120, 120, 120)"});
	
       
	});
 	$(".bCSujG").click(function(){
	$('.login').show()
	$('#dangnhap').show();;
	$('.sign').hide();
	$('.bZfMdt h2').text("Đăng nhập");
	$('.bZfMdt p').text("Đăng nhập để theo dõi đơn hàng, lưu danh sách sản phẩm yêu thích, nhận nhiều ưu đãi hấp dẫn.");
	$('.bCSujG').css({"border-bottom": "3px solid rgb(27, 168, 255)", "color":"rgb(27, 168, 255)"});
	$('.cuMNQR').css({"border-bottom": "0px", "color":"rgb(120, 120, 120)"});
	});


	 $(".male").click(function(){
	 	$('.kdUEwV .icon-on-male').css("display","block");
	 	$('.kdUEwV .icon-off-male').css("display","none");
	 	$('.kdUEwV .icon-off-female').css("display","block");
	 	$('.kdUEwV .icon-on-female').css("display","none");
	});
	  $(".female").click(function(){
	 	$('.kdUEwV .icon-on-female').css("display","block");
	 	$('.kdUEwV .icon-off-female').css("display","none");
	 	$('.kdUEwV .icon-off-male').css("display","block");
	 	$('.kdUEwV .icon-on-male').css("display","none");
	 	
	});
});