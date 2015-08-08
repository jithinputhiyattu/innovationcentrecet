function getData() {
	$.ajax({
		url: "calender.php",
		cache: false
	})
	.done(function( html ) {
		$('#cal').html(html);
	});
}

$(document).ready(function(e) {
    $('#testBtn').on("mouseover", getData);
});