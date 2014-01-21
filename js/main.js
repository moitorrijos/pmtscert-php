/* Here goes my javascript */
jQuery(document).ready(function($){
	$certificate = $('.certificate');
	$instructor = $('.instructor');
	$search = $('.search');
	$main = $('main');

	$instructor.on('click', function(event){
		event.preventDefault();
		$this = $(this);
		$main.load('add-instructor.php section');
		$('.current-menu-item').removeClass('current-menu-item');
		$this.addClass('current-menu-item');

	});

	$search.on('click', function(event){
		event.preventDefault();
		$this = $(this);
		$main.load('search-certificate.php section');
		$('.current-menu-item').removeClass('current-menu-item');
		$this.addClass('current-menu-item');
	});

	$certificate.on('click', function(event){
		event.preventDefault();
		$this = $(this);
		$main.load('index.php section');
		$('.current-menu-item').removeClass('current-menu-item');
		$this.addClass('current-menu-item');
	});
});