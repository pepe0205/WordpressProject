$(document).ready(function () {
$('.jgcBwz .cart-products__del').hover(function () {
	$(this).css('text-decoration', 'underline');
}, function () {
	$(this).css('text-decoration', 'none');
});

$('.iyaBQp .group-input button:last-child').click(function () {

	var numb = $('.iyaBQp .group-input input').val(),
		newNumb;
		
	newNumb = parseInt(numb) + 1;

	$('.iyaBQp .group-input input').val(newNumb);


});
$('.iyaBQp .group-input button:first-child').click(function () {

	var numb = $('.iyaBQp .group-input input').val(),
		newNumb;
	if (numb > 1) {
		newNumb = parseInt(numb) - 1;
		$('.iyaBQp .group-input input').val(newNumb);
	}
});
$('.iyaBQp .group-input input').change(function () {

	var numb = $('.iyaBQp .group-input input').val(),
		newNumb;
	if (numb < 1) {
		newNumb = 1;
		$('.iyaBQp .group-input input').val(newNumb);

	}
});

$('.qty-decrease').click(function () {

	var $button = $(this);
	var $parent = $button.parent();
	var numb = $parent.children('.qty-input').val();
	var newNumb;
	console.log(numb);
	if (numb > 1) {
		newNumb = parseInt(numb) - 1;
		$parent.find('.qty-input').val(newNumb);
	}
	
});

});

