$(function () {
	$('[data-toggle="tooltip"]').tooltip()
});


var activeClass = 'active-tab',
	activeClassTab = 'option-active';

$('[data-group]').each(function(){
	var $allClick = $(this).find('[data-click]');

	$allClick.first().addClass(activeClass);

	$allClick.click(function(e){
		e.preventDefault();

		var id = $(this).data('click'),
		$target = $('[data-click="'+ id + '"]');

		$allClick.removeClass(activeClass);

		$target.addClass(activeClass);
	});
});

$('.mobile-btn').click(function(){
	$(this).toggleClass('active');
	$('#sidebar').toggleClass('active');
});

