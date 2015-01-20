jQuery( document ).ready( function( $ ) {
	$('article p:not(:has(img, iframe))').addClass('text');
	$('#about-page').fitVids();
});
