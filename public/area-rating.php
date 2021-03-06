      <!-- Header -->
      <?php include 'header.php';?>
      <?php include 'parameterList.php';?>

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
                <button class="btn waves-effect waves-light background-orange pulse" type="submit" name="action">Bedøm område
                  <i class="material-icons right">play_arrow</i>
                </button>
              </a>
            </div>

          </div>

        </div>

      </div>

        <ul class="collapsible" data-collapsible="expandable">
            <li>
              <div class="collapsible-header active background-blue white-text"><i class="material-icons safemove-orange">insert_chart</i>Beboernes tilfredshed med området</div>
              <div class="collapsible-body">
                <div class="row center">

                  <div class="col s6 right-border">

                    <p><?php echo $safety ?></p>
                    <p><?php echo $noiseLevel ?></p>
                    <p><?php echo $neighborhood ?></p>
                    <p><?php echo $onlineConnections ?></p>
                    <p><?php echo $childFriendly ?></p>
                    <p><?php echo $condition ?></p>

                    <div class="ldBar" data-value="50">

                      <div id="myItem1"></div>
                        <script>
                          var bar1 = new ldBar("#myItem1");
                          var bar2 = document.getElementById('myItem1').ldBar;
                          bar1.set(60);
                        </script>
                      </div>
                    </div>

                  <div class="col s6">
                    <p><?php echo $recommendation ?></p>
                    <p><?php echo $parking ?></p>
                    <p><?php echo $cleanEnvironment ?></p>
                    <p><?php echo $cozyness ?></p>
                    <p><?php echo $style ?></p>
                  </div>

                </div>
              </div>
            </li>
            <li>
              <div class="collapsible-header active background-blue white-text"><i class="material-icons safemove-orange">location_on</i>Oversigt over område</div>
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
              <div class="collapsible-header active background-blue white-text"><i class="material-icons safemove-orange">comment</i>Kommentarer</div>
              <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
          </ul>

    <!-- Footer -->
    <?php include 'footer.php';?>
