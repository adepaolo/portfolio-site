$(document).ready( function() {

	var http2pic = "https://http2pic.haschek.at/api.php?width=300&type=jpg&url=";
	var bonterraThumb = "http://www.anthonydepaolo.com/dev/bonterra/index.html";
	var auPetitThumb = "http://www.anthonydepaolo.com/dev/APE2/home.htm";

	$('#aupetit').attr('src', http2pic+auPetitThumb);
	$('#bonterra').attr('src', http2pic+bonterraThumb);
	console.log(http2pic+bonterraThumb);


})