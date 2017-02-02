
var googlemaps = $("#map");
if (googlemaps.length) {

    var zoom = 16,
        lat = -33.87695388579145,
        lon = 151.22183918952942,
        html =  '<address>' +
                    '<div>' +
                        '<div><b>Address:</b></div>' +
                        '<div>322 Victoria Street,<br>Darlinghurst NSW 2010,<br>Australia</div>' +
                    '</div>' +
                    '<div>' +
                        '<div><b>Phone:</b></div>' +
                        '<div>1800-2233-4455</div>' +
                    '</div>' +
                    '<div>' +
                        '<div><b>Fax:</b></div>' +
                        '<div>1800-2233-4455</div>' +
                    '</div>' +
                    '<div>' +
                        '<div><b>Email:</b></div>' +
                        '<div><a href="mailto:victoria@yoursite.com">victoria@yoursite.com</a></div>' +
                    '</div>' +
                '</address>',
        img = 'img/pin.png';

    google.maps.event.addDomListener(window, 'load', function() {

        var center = new google.maps.LatLng(lat, lon),
            map = new google.maps.Map(document.getElementById('map'), {
                zoom    : zoom,
                center  : center
            }),
            infowindow = new google.maps.InfoWindow({
                content : html
            }),
            marker = new google.maps.Marker({
                position    : center,
                map         : map,
                icon        : img
            });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
        });

        google.maps.event.addDomListener(window, 'resize', function() {
            google.maps.event.trigger(map, 'resize');
            map.setCenter(center);
        });

    });
}