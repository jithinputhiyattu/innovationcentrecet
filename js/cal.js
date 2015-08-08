function getData(event) {
	$('#box').show();
	$("#box").css("left", $(this).position().left+50).css("top", $(this).position().top+50);
	var url = $(this).find('.poplink').attr('href');
	$.ajax({
	  url: url,
	  cache: false
	}).done(function( html ) {
	  $('#popup').html(html);
	});
	return false;
}

function noData() {
	$('#box').hide();
	return false;
}

$(document).ready(function(e) {
	$('#box').hide();
	$('.datex').on("click", getData);
	$('#closeBtn').on("click", noData);
});