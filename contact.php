<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="ATAK Interactive" />
<meta name="keywords" content="" />
<meta name="description" content="" />

<title>Lagree Fitness</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/fonts.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">

<meta name="Googlebot" content="index, follow">
<meta name="revisit-after" content="3">
<meta name="Robots" content="INDEX, FOLLOW">
	
<meta property="og:site_name" content="">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="article">
<meta property="og:description" content="">
<meta property="og:image" content="images/logo.png">
<meta property="og:title" content="">
<meta property="og:url" content="">

<link rel="shortcut icon" href="images/favicon.png" />
<link rel="stylesheet" href="css/swiper.css">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<?php include('popups.php'); ?>

<?php include('header.php'); ?>

<section class="header-section">
	<div class="container">
		<div class="row">
			<h1 class="header-title">Contact</h1>
		</div>
	</div>
</section>

<section class="boxes">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 flexx boxes-wrap">
				<div class="boxes-container text-center">
					<h2 class="black bold">STUDIO & PRESS INQUIRIES</h2>
					<p class="black mrgB30">
						For studio inquiries, please call us at:<br>
						<span class="font20 bold red">424-274-2899</span>
						<br><br>
						For press inquiries, please email us at:<br>
						<a class="font20 bold red" href="info@lagreefitness.com">info@lagreefitness.com</a>
					</p>
					<a href="www.lagreestudio.com" class="round-button big">LAGREE STUDIO WEBSITE</a>
				</div>
			</div>
			<div class="col-md-4 flexx boxes-wrap red-bg">
				<div class="boxes-container text-center">
					<h2 class="white bold">GENERAL INQUIRIES</h2>
					<p class="white mrgB30">
						Lagree Fitness, Inc.<br>
						3098 N California St, Burbank, California 91504 
						<br>
						<br>
						<span class="font20 bold white">info@lagreefitness.com</span><br>
						<a class="font20 bold white" href="tel:310-990-0370">310-990-0370</a>
					</p>
					<a href="www.lagreestudio.com" class="round-button white-button big">LAGREE STUDIO WEBSITE</a>
				</div>
			</div>
			<div class="col-md-4 flexx boxes-wrap">
				<div class="boxes-container text-center">
					<h2 class="bold">LICENSING & CERTIFICATION</h2>
					<a href="www.lagreestudio.com" class="round-button black-button big">GET LICENCED TODAY</a>
					<a href="www.lagreestudio.com" class="round-button big">GET CERTIFIED TODAY</a>
					<p class="mrgT10 mrgB10">Follow Lagree Fitness On:</p>
					<div class="social-contact">
						<a href="#3"><img src="images/fb-contact.png" alt="fb contact icon" class="img-responsive" /></a>
						<a href="#3"><img src="images/tw-contact.png" alt="twitter contact icon" class="img-responsive" /></a>
						<a href="#3"><img src="images/insta-contact.png" alt="instagram contact icon" class="img-responsive" /></a>
						<a href="#3"><img src="images/yt-contact.png" alt="youtube contact icon" class="img-responsive" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="">
	<div id="canvas-map" style="width:100%; height:500px;"></div>
</section>

<?php include('footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/swiper.min.js"></script>
<script>
	var swiper = new Swiper('.swiper-container', {
		pagination: '.swiper-pagination',
		paginationClickable: true,
		direction: 'vertical',
		speed: 800,
		autoplay: 4000,
        autoplayDisableOnInteraction: false
	});
	var swiper2 = new Swiper('.swiper-container-stories', {
		pagination: '.swiper-pagination-stories',
		paginationClickable: true,
		direction: 'vertical'
	});
	var swiper2 = new Swiper('.swiper-container-locations', {
        effect: 'flip',
		nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
	});
    var swiper = new Swiper('.swiper-container-references', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 6,
        centeredSlides: false,
        spaceBetween: 30,
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            320: {
                slidesPerView: 2,
                spaceBetween: 10
            }
        }
	});	
</script>
<script src="js/bootstrap.youtubepopup.js"></script>
<script type="text/javascript">
$(document).ready(function(){
		$(".youtube").YouTubeModal({autoplay:1, width:900, height:600});
});
</script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA18amMzLYu5Qqr6ACiJ4DG4CBnob3tYAo"></script>

<script type="text/javascript">
function InfoBox(opts) {
    google.maps.OverlayView.call(this);
    this.latlng_ = opts.latlng;
    this.map_ = opts.map;
    this.content = opts.content;
    this.offsetVertical_ = -265;
    this.offsetHorizontal_ = -160;
    this.height_ = 165;
    this.width_ = 320;
    var me = this;
    this.boundsChangedListener_ =
        google.maps.event.addListener(this.map_, "bounds_changed", function () {
            return me.panMap.apply(me);
        });
    // Once the properties of this OverlayView are initialized, set its map so
    // that we can display it. This will trigger calls to panes_changed and
    // draw.
    this.setMap(this.map_);
}
/* InfoBox extends GOverlay class from the Google Maps API
 */
InfoBox.prototype = new google.maps.OverlayView();
/* Creates the DIV representing this InfoBox
 */
InfoBox.prototype.remove = function () {
    if (this.div_) {
        this.div_.parentNode.removeChild(this.div_);
        this.div_ = null;
    }
};
/* Redraw the Bar based on the current projection and zoom level
 */
InfoBox.prototype.draw = function () {
    // Creates the element if it doesn't exist already.
    this.createElement();
    if (!this.div_) return;
    // Calculate the DIV coordinates of two opposite corners of our bounds to
    // get the size and position of our Bar
    var pixPosition = this.getProjection().fromLatLngToDivPixel(this.latlng_);
    if (!pixPosition) return;
    // Now position our DIV based on the DIV coordinates of our bounds
    this.div_.style.width = this.width_ + "px";
    this.div_.style.left = (pixPosition.x + this.offsetHorizontal_) + "px";
    this.div_.style.height = this.height_ + "px";
    this.div_.style.top = (pixPosition.y + this.offsetVertical_) + "px";
    this.div_.style.display = 'block';
};
/* Creates the DIV representing this InfoBox in the floatPane. If the panes
 * object, retrieved by calling getPanes, is null, remove the element from the
 * DOM. If the div exists, but its parent is not the floatPane, move the div
 * to the new pane.
 * Called from within draw. Alternatively, this can be called specifically on
 * a panes_changed event.
 */
InfoBox.prototype.createElement = function () {
    var panes = this.getPanes();
    var div = this.div_;
    if (!div) {
        // This does not handle changing panes. You can set the map to be null and
        // then reset the map to move the div.
        div = this.div_ = document.createElement("div");
            div.className = "infobox arrow-down"
        var contentDiv = document.createElement("div");
            contentDiv.className = "content"
            contentDiv.innerHTML = this.content;
        var closeBox = document.createElement("div");
            closeBox.className = "close";
            closeBox.innerHTML = "x";
        div.appendChild(closeBox);

        function removeInfoBox(ib) {
            return function () {
                ib.setMap(null);
            };
        }
        google.maps.event.addDomListener(closeBox, 'click', removeInfoBox(this));
        div.appendChild(contentDiv);
        div.style.display = 'none';
        panes.floatPane.appendChild(div);
        this.panMap();
    } else if (div.parentNode != panes.floatPane) {
        // The panes have changed. Move the div.
        div.parentNode.removeChild(div);
        panes.floatPane.appendChild(div);
    } else {
        // The panes have not changed, so no need to create or move the div.
    }
}
/* Pan the map to fit the InfoBox.
 */
InfoBox.prototype.panMap = function () {
    // if we go beyond map, pan map
    var map = this.map_;
    var bounds = map.getBounds();
    if (!bounds) return;
    // The position of the infowindow
    var position = this.latlng_;
    // The dimension of the infowindow
    var iwWidth = this.width_;
    var iwHeight = this.height_;
    // The offset position of the infowindow
    var iwOffsetX = this.offsetHorizontal_;
    var iwOffsetY = this.offsetVertical_;
    // Padding on the infowindow
    var padX = 40;
    var padY = 40;
    // The degrees per pixel
    var mapDiv = map.getDiv();
    var mapWidth = mapDiv.offsetWidth;
    var mapHeight = mapDiv.offsetHeight;
    var boundsSpan = bounds.toSpan();
    var longSpan = boundsSpan.lng();
    var latSpan = boundsSpan.lat();
    var degPixelX = longSpan / mapWidth;
    var degPixelY = latSpan / mapHeight;
    // The bounds of the map
    var mapWestLng = bounds.getSouthWest().lng();
    var mapEastLng = bounds.getNorthEast().lng();
    var mapNorthLat = bounds.getNorthEast().lat();
    var mapSouthLat = bounds.getSouthWest().lat();
    // The bounds of the infowindow
    var iwWestLng = position.lng() + (iwOffsetX - padX) * degPixelX;
    var iwEastLng = position.lng() + (iwOffsetX + iwWidth + padX) * degPixelX;
    var iwNorthLat = position.lat() - (iwOffsetY - padY) * degPixelY;
    var iwSouthLat = position.lat() - (iwOffsetY + iwHeight + padY) * degPixelY;
    // calculate center shift
    var shiftLng =
        (iwWestLng < mapWestLng ? mapWestLng - iwWestLng : 0) +
        (iwEastLng > mapEastLng ? mapEastLng - iwEastLng : 0);
    var shiftLat =
        (iwNorthLat > mapNorthLat ? mapNorthLat - iwNorthLat : 0) +
        (iwSouthLat < mapSouthLat ? mapSouthLat - iwSouthLat : 0);
    // The center of the map
    var center = map.getCenter();
    // The new map center
    var centerX = center.lng() - shiftLng;
    var centerY = center.lat() - shiftLat;
    // center the map to the new shifted center
    map.setCenter(new google.maps.LatLng(centerY, centerX));
    // Remove the listener after panning is complete.
    google.maps.event.removeListener(this.boundsChangedListener_);
    this.boundsChangedListener_ = null;
};

function initialize() {
    var markers = []; // makers array
    var styles = [
    {
      stylers: [
        { saturation: -100 }
      ]
    },{
      featureType: "road",
      elementType: "geometry",
      stylers: [
        { lightness: 100 },
      ]
    },{
      featureType: "road",
      elementType: "labels",

    }
  ];
  var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

    var myOptions = { // map settings
        scrollwheel: false,
        zoom: 8,
        center: new google.maps.LatLng(34.149712,-118.451306),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        sensor: 'true'
    }
    var map = new google.maps.Map(document.getElementById("canvas-map"), myOptions);
    map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');

    var data = [ // map data
      {
        'id':1,
        'content':'<strong class="bold">Lagree Fitness, Inc.</strong><br>3098 N California St, Burbank, California 91504 <br>Phone:  310-990-0370<br>Fax:  1-310-388-0807<br>Email:  <a href="mailto:info@lagreefitness.com">info@lagreefitness.com</a>',
        'position': {
          'lat':34.149712,
          'lng':-118.451306
         }
      }
    ]

    for (var i = 0; i < data.length; i++) {
      var current = data[i];
  
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(current.position.lat, current.position.lng),
        map: map,
		title:"ATAK Interactive, Los Angeles",
		icon: "images/google-marker.png",
        content: current.content
      });
  
      markers.push(marker);
  
      google.maps.event.addListener(markers[i], "click", function (e) {
        var infoBox = new InfoBox({
            latlng: this.getPosition(),
            map: map,
			title:"ATAK Interactive, Los Angeles",
			icon: "images/google-marker.png",
            content: this.content
        });
      });
    }
}

jQuery(document).ready(function(){
    initialize();
});
</script>

</body>
</html>