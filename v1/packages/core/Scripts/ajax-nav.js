$(document).ready(function () {
	$('a.js-ajax').click( function( event ) {
		set_ajax_link( $(this), event );
	});
});
function set_ajax_link( el, event ){
	event.preventDefault();
	var url = el.attr("href");
	load_page_content( url );
}
function load_page_content( url ){
	$("#content").load( url, { 'ajax': 'true' }, function(){
		$('#content a.js-ajax').click( function( event ) {
			set_ajax_link( $(this), event );
		});
	});
}