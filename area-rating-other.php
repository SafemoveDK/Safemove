<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import Font Awesome-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="./style.css"/>
      <meta charset="iso-8859-1" />
      <!-- Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Safemove - </title>

    </head>

    <body>

      <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMl37AbpRK06nHLLGmxYUb51MycTi0fAo&callback=initMap">
      </script>

      <script>

        function initMap() {

          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 3,
            center: {lat: -28.024, lng: 140.887}
          });

          // Create an array of alphabetical characters used to label the markers.
          var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

          // Add some markers to the map.
          // Note: The code uses the JavaScript Array.prototype.map() method to
          // create an array of markers based on a given "locations" array.
          // The map() method here has nothing to do with the Google Maps API.
          var markers = locations.map(function(location, i) {
            return new google.maps.Marker({
              position: location,
              label: labels[i % labels.length]
            });
          });

          // Add a marker clusterer to manage the markers.
          var markerCluster = new MarkerClusterer(map, markers,
              {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
        }

        var locations = [
          {lat: -31.563910, lng: 147.154312},
          {lat: -33.718234, lng: 150.363181},
          {lat: -33.727111, lng: 150.371124},
          {lat: -33.848588, lng: 151.209834},
          {lat: -33.851702, lng: 151.216968},
          {lat: -34.671264, lng: 150.863657},
          {lat: -35.304724, lng: 148.662905},
          {lat: -36.817685, lng: 175.699196},
          {lat: -36.828611, lng: 175.790222},
          {lat: -37.750000, lng: 145.116667},
          {lat: -37.759859, lng: 145.128708},
          {lat: -37.765015, lng: 145.133858},
          {lat: -37.770104, lng: 145.143299},
          {lat: -37.773700, lng: 145.145187},
          {lat: -37.774785, lng: 145.137978},
          {lat: -37.819616, lng: 144.968119},
          {lat: -38.330766, lng: 144.695692},
          {lat: -39.927193, lng: 175.053218},
          {lat: -41.330162, lng: 174.865694},
          {lat: -42.734358, lng: 147.439506},
          {lat: -42.734358, lng: 147.501315},
          {lat: -42.735258, lng: 147.438000},
          {lat: -43.999792, lng: 170.463352}
        ]
      </script>

      <!-- Header -->
      <?php include 'header.php';?>

      <?php
          $street_name = "Danmarksgade 9, 9000 Aalborg";
      ?>

      <div>

        <br />
        <br />

        <div class="container">
          <div class="row">
            <div id="locationField" class="col s6">
              <input id="autocomplete" placeholder="Indtast din adresse ..."
                     onFocus="geolocate()" type="text"></input>
            </div>

            <div class="col s2">
              <button class="btn waves-effect waves-light background-blue" type="submit" name="action">Søg
                <i class="material-icons left">search</i>
              </button>
            </div>

            <div class="col s3 right">
              <button class="btn waves-effect waves-light background-orange" type="submit" name="action">Bedøm område
                <i class="material-icons right">play_arrow</i>
              </button>
            </div>

          </div>
        </div>

      </div>

        <ul class="collapsible" data-collapsible="expandable">
            <li>
              <div class="collapsible-header active background-blue white-text"><i class="material-icons safemove-orange">insert_chart</i>Overall rating for området</div>
              <div class="collapsible-body">
                <div class="row center">

                  <div class="col s6 right-border">
                    <p>PARAMETER 1</p>
                    <p>PARAMETER 3</p>
                    <p>PARAMETER 5</p>
                    <p>PARAMETER 7</p>
                    <p>PARAMETER 9</p>
                  </div>

                  <div class="col s6">
                    <p>PARAMETER 2</p>
                    <p>PARAMETER 4</p>
                    <p>PARAMETER 6</p>
                    <p>PARAMETER 8</p>
                    <p>PARAMETER 10</p>
                  </div>

                </div>
              </div>
            </li>
            <li>
              <div class="collapsible-header background-blue white-text"><i class="material-icons safemove-orange">location_on</i>Oversigt over område</div>
              <div class="collapsible-body">
                <div class="row">

                  <div class="col s6">
                    <div id="map"></div>
                  </div>

                  <div class="col s6 center left-border">
                    <p>PARAMETER 1</p>
                    <p>PARAMETER 2</p>
                    <p>PARAMETER 3</p>
                    <p>PARAMETER 4</p>
                    <p>PARAMETER 5</p>
                  </div>

                </div>
              </div>
            </li>
            <li>
              <div class="collapsible-header background-blue white-text"><i class="material-icons safemove-orange">comment</i>Kommentarer</div>
              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
          </ul>

        <div class="background-blue">
          &nbsp;
          <p class="container white-text center-align">© Safemove 2017. Alle rettigheder forbeholdes.</p>
          &nbsp;
        </div>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

      <script>
        // This example displays an address form, using the autocomplete feature
        // of the Google Places API to help users fill in the information.

        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

        var placeSearch, autocomplete;
        var componentForm = {
          route: 'long_name',
          street_number: 'short_name',
          locality: 'long_name',
          postal_code: 'short_name'
        };

        function initAutocomplete() {
          // Create the autocomplete object, restricting the search to geographical
          // location types.
          autocomplete = new google.maps.places.Autocomplete(
              /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
              {types: ['geocode']});

          // When the user selects an address from the dropdown, populate the address
          // fields in the form.
          autocomplete.addListener('place_changed', fillInAddress);
        }

        function fillInAddress() {
          // Get the place details from the autocomplete object.
          var place = autocomplete.getPlace();

          for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
          }

          // Get each component of the address from the place details
          // and fill the corresponding field on the form.
          for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
              var val = place.address_components[i][componentForm[addressType]];
              document.getElementById(addressType).value = val;
            }
          }
        }

        // Bias the autocomplete object to the user's geographical location,
        // as supplied by the browser's 'navigator.geolocation' object.
        function geolocate() {
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
              var geolocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
              };
              var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
              });
              autocomplete.setBounds(circle.getBounds());
            });
          }
        }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMl37AbpRK06nHLLGmxYUb51MycTi0fAo&libraries=places&callback=initAutocomplete"
          async defer></script>

    </body>
  </html>
