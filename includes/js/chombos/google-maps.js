function initMap() {
	var uluru = {lat: 38.363, lng: -2.024};
	var map = new google.maps.Map(document.getElementById('map'), {
	  zoom: 3,
	  center: uluru
	});
	var marker = new google.maps.Marker({
	  position: uluru,
	  map: map
	});
}