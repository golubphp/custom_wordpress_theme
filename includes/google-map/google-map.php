<!-- Google Map -->
<div id="googleMap" class="lenvixen-grayscale" style="width:100%;height:450px;"></div>
	  
	  <!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(43.155878, 22.586773);
  var mapOptions= {
    center:myCenter,
    zoom:5, scrollwheel: true, draggable: true,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtE7U0ILcjHlxrFH3ZBCc6CxTRPg3liUs&callback=myMap"></script>
