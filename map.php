<script>
	function initMap() {
	  // Location
	  var germany = {lat: 52.520, lng: 13.404};
	  var map = new google.maps.Map(
	      document.getElementById('map'), {zoom: 4, center: germany});
	  // The marker
	  var marker = new google.maps.Marker({position: germany, map: map});
	}
	</script>
	<!-- No API Key created, it will load with a message of "For development purposes only" -->
	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap">
</script>