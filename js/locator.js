$(document).ready(function() {
	$('.bh-sl-submit').click(function() {
		$('#inner-panel-title span').html($('#bh-sl-address').val());
	});
});
Handlebars.registerHelper('dodaj', function(broj) {
	return parseInt(broj) + 1;
});
$(function() {
	$('#map-container').storeLocator({
		'slideMap': false,
		'autoGeocode' : true,
		'defaultLoc' : true,
		'defaultLat': 34.078004,
		// 'debug': true,
		'defaultLng': -118.376682,
		// 'distanceAlert': -1, //disable 60km from center
		'dataType': "json",
		'dataLocation': "usa-locator/studios",
		'bounceMarker': false,
		'storeLimit': -1,
		'pagination' : false,
		'listColor1' : '#171717',
		'listColor2' : '#171717',
		'mapSettings': { 
			zoom : 12, 
			mapTypeId: google.maps.MapTypeId.ROADMAP 
		}
	});
	$('.skrol').jScrollPane({
		animateScroll: true
	});

});