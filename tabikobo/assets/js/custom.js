$(document).ready(function() {
	$(".nav_menu_sp").hide();
	$(".open_menu").click(function(){
		$(".overlay").css("display", "block");
		$(".nav_menu_sp").stop().slideToggle();
	});

	$(".overlay").click(function(){
		$(".nav_menu_sp").stop().slideUp("fast");
		$(".overlay").css("display", "none");

	});
});