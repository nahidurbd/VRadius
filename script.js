// set menu item width 
$(document).ready(function() {
	// change the width of each menu item
	var full_width = $('.col-xs-12').width();
	var sum_of_child = $('.menubar-small-screen').children().length;
	var menu_width = full_width/sum_of_child;
	$('.small-menu-item').css('width', menu_width+'px');
});

$('.delete-data').click(function() {
	var index = $(this).attr('data-index');
	alert(index);
});