
    function initialize() {
    	// set up coordinate
		var latlng       = new google.maps.LatLng(10.783464,106.648305);
		var latlngbachai = new google.maps.LatLng(10.780098,106.65813);
    	// call the map into ui
      	var map = new google.maps.Map(
        document.getElementById('map-canvas'), {
          	center: latlng,
          	zoom: 18,
          	mapTypeId: google.maps.MapTypeId.ROADMAP
      	});
      	// cotent infowindow
      	var contentString = '<div>'+
	      '<h4>Cong Ty TNHH GreenWall</h4>'+
	      '<div>'+
	      '<p><strong>Address : </strong> 127/97 Ni Su Huynh Lien</p>'+
	      '<p><strong>Phone : </strong> 0909109786</p>'+
	      '<img alt="cong ty" src="images">'+
	      '</div>'+
	      '</div>';

      	var infowindow = new google.maps.InfoWindow({
      		content: contentString
  		});

      	var marker = new google.maps.Marker ({
      		position: latlng,
      		map: map,
      		title: "hello world!"
      	});
      	//center map when resize
      	google.maps.event.addDomListener(window, "resize", function() {
	    	var center = map.getCenter();
	    	google.maps.event.trigger(map, "resize");
	    	map.setCenter(center); 
		});
 
 		infowindow.open(map,marker);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
