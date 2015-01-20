jQuery( document ).ready( function( $ ) {
	setTitlePosition();
	$( window ).resize(function() {
		setTitlePosition();
	});


function setTitlePosition(){
	var max_logo_size=550;
	var front_title_side=$("#front-logo").height();
	var menu_height=$(".main-navigation").height();
	var window_height=$( window ).height();
	var window_width=$(window).width();
	var window_short_side=Math.min(window_height,window_width);

	//resize the logo if the screen is too small
	if(window_short_side<max_logo_size+50){
		front_title_side=window_short_side-50;
		$("#front-logo").height(front_title_side);
		$("#front-logo").width(front_title_side);
	}else{
		$("#front-logo").height(max_logo_size);
		$("#front-logo").width(max_logo_size);
	}

	// change the position of the logo
	var margin_top=(window_height)/2-(front_title_side/2)-menu_height;
	if(margin_top<=0)
		margin_top=0;
	$('.front-title #front-logo').css('margin-top',margin_top);
	$('.front-title #front-logo').css('margin-bottom ',margin_top);
}

});