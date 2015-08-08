function getData(e) {
	url = $(this).find("h2").find("a").attr("href");
	$.ajax({
		url: url
	})
	.done(function(html) {
		$('#box').html(html);
		$("#box").position(e.pageX, e.pageY);
	});
	return false;
}

$(document).ready(function(e) {
    $('.datex').on("mouseover", getData);
});