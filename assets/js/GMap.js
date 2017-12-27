function initMap() {
             
            var locations = [
              ['Jadavpur University<br>Salt Lake Campus', 22.560473, 88.413460, 2],
              ['Jadavpur University', 22.499842, 88.371498, 1],
            ];
        
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 12,
              center: new google.maps.LatLng(22.5301575, 88.392479),
              mapTypeId: google.maps.MapTypeId.ROADMAP
            });
        
            var infowindow = new google.maps.InfoWindow();
        
            var marker, i;
        
            for (i = 0; i < locations.length; i++) {  
              marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                icon: './assets/img/mapMarker.png',
                map: map
              });
        
              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                  infowindow.setContent(locations[i][0]);
                  infowindow.open(map, marker);
                }
              })(marker, i));
            }
         }