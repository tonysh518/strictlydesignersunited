 $.backstretch("images/bg.jpg");
 var currentSection = 0;
 
$('.navigation a').click(function(e){
	e.preventDefault();
	$.scrollTo( $(this).attr('href'), 1000, {easing:'easeOutQuart'} );
	$('.navigation a').removeClass('actived');
	$(this).addClass('actived');
});
 
 $('.who_slider').cycle({ 
	fx:     'fade',  
	timeout: 4000, 
	speed: 500,
	width: 615,
	height: 408,
	fit: 1,
	cleartypeNoBg: true,
	sync: true
});

$(".gallery_image a").fancybox({
	padding: 0,
	openEffect: 'elastic',
	closeEffect: 'elastic',
	helpers: {
		title : {
			type : 'outside'
		},
		overlay : {
			speedOut : 0
		}
	}
});

$('.gallery_nav a').click(function(){
	alert(1);
	var index = $.inArray(this,$('.gallery_nav a'));
	console.log(index);
});


var styles = [
  {
	stylers: [
	  { hue: "#000" },
	  { saturation: -100 }
	]
  },{
	featureType: "road",
	elementType: "geometry",
	stylers: [
	  { lightness: 50 },
	  { visibility: "simplified" }
	]
  },{
	featureType: "road",
	elementType: "labels",
	stylers: [
	  { visibility: "on" }
	]
  }
];

// Create a new StyledMapType object, passing it the array of styles,
// as well as the name to be displayed on the map type control.
var styledMap = new google.maps.StyledMapType(styles,
  {name: "Styled Map"});
var point = new google.maps.LatLng(31.213368,121.506979);
// Create a map object, and include the MapTypeId to add
// to the map type control.
var mapOptions = {
  zoom: 17,
  center: new google.maps.LatLng(31.213368,121.506979),
  mapTypeControlOptions: {
	mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
  }
};

infowindow = new google.maps.InfoWindow();
geocoder = new google.maps.Geocoder();
map = new google.maps.Map(document.getElementById('googlemap'),
  mapOptions);

//Associate the styled map with the MapTypeId and set it to display.
map.mapTypes.set('map_style', styledMap);
map.setMapTypeId('map_style');

var marker = new google.maps.Marker({
	position: point,
	map: map,
	title: 'Strictly'
});


