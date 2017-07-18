      <!-- Header -->
      <?php include 'header.php';?>


      <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMl37AbpRK06nHLLGmxYUb51MycTi0fAo&callback=initMap">
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMl37AbpRK06nHLLGmxYUb51MycTi0fAo&libraries=places&callback=initAutocomplete"
          async defer></script>

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
              {types: ['geocode'],
              componentRestrictions: {country: "dk"}
              });


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

      <?php
          $street_name = "Danmarksgade, 9000 Aalborg";
      ?>

      <div class="">

        <br />
        <br />

        <div class="container">

          <div class="row">

            <div id="locationField" class="col s5">
              <input id="autocomplete" placeholder="<?php echo $street_name ?>"
                     onFocus="geolocate()" type="text"></input>
            </div>

            <div class="col s4">
              <button class="btn waves-effect waves-light background-blue" type="submit" name="action">Vis bedømmelse
                <i class="fa fa-heart left safemove-orange"></i>
              </button>
            </div>

            <div class="col s3 right">
              <a href="rate-area-1.php">
                <button class="btn waves-effect waves-light background-orange" type="submit" name="action">Bedøm område
                  <i class="material-icons right">play_arrow</i>
                </button>
              </a>
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

                  <div class="col s6 right-border">
                    <div id="map"></div>
                  </div>

                  <div class="col s6">
                      <input type="checkbox" class="filled-in" id="parameter-1"/>
                      <label for="parameter-1">Parameter 1</label>
                    <p>
                      <input type="checkbox" class="filled-in" id="parameter-2" />
                      <label for="parameter-2">Parameter 2</label>
                    </p>
                    <p>
                      <input type="checkbox" class="filled-in" id="parameter-3" />
                      <label for="parameter-3">Parameter 3</label>
                    </p>
                    <p>
                      <input type="checkbox" class="filled-in" id="parameter-4" />
                      <label for="parameter-4">Parameter 4</label>
                    </p>
                    <p>
                      <input type="checkbox" class="filled-in" id="parameter-5" />
                      <label for="parameter-5">Parameter 5</label>
                    </p>
                    <p>
                      <input type="checkbox" class="filled-in" id="parameter-6" />
                      <label for="parameter-6">Parameter 6</label>
                    </p>
                    <p>
                      <input type="checkbox" class="filled-in" id="parameter-7" />
                      <label for="parameter-7">Parameter 7</label>
                    </p>
                    <p>
                      <input type="checkbox" class="filled-in" id="parameter-8" />
                      <label for="parameter-8">Parameter 8</label>
                    </p>
                    <p>
                      <input type="checkbox" class="filled-in" id="parameter-9" />
                      <label for="parameter-9">Parameter 9</label>
                    </p>
                    <p>
                      <input type="checkbox" class="filled-in" id="parameter-10" />
                      <label for="parameter-10">Parameter 10</label>
                    </p>
                  </div>

                </div>
              </div>
            </li>
            <li>
              <div class="collapsible-header background-blue white-text"><i class="material-icons safemove-orange">comment</i>Kommentarer</div>
              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
          </ul>

          <!-- Footer -->
          <?php include 'footer.php';?>
