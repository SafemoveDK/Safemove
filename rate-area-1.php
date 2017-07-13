
      <!-- Header -->
      <?php include 'header.php';?>

      <div class="background-blue">
        <h3 class="rate-header center">Bedøm dit område</h3>
        <div class="progress">
          <div class="determinate" style="width: 33%"></div>
        </div>
      </div>




      <div class="container">
        <br />
        <div class="row">
          <div class="col s2">
            <p><b>Find din adresse</b></p>
          </div>
          <div id="locationField" class="col s10">
            <input id="autocomplete" placeholder="Indtast din adresse ..."
                   onFocus="geolocate()" type="text"></input>
          </div>
        </div>

        <div class="col s6">
          <p><b>Du har valgt følgende adresse:</b></p>
        </div>

        <table id="address" class="chosen-address">
          <tr>
            <td class="label">Adresse</td>
            <td class="wideField" colspan="3"><input class="field" id="route"
                  disabled="true" readonly></input></td>
            <td class="slimField"><input class="field" id="street_number"
                  disabled="true" readonly></input></td>
          </tr>
          <tr>
            <td class="label">By</td>
            <!-- Note: Selection of address components in this example is typical.
                 You may need to adjust it for the locations relevant to your app. See
                 https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform
            -->
            <td class="wideField" colspan="2"><input class="field" id="locality"
                  disabled="true" readonly></input></td>
          </tr>
          <tr>
            <td class="label">Postnummer</td>
            <td class="wideField"><input class="field" id="postal_code"
                  disabled="true" readonly></input></td>
          </tr>
        </table>

        <div class="row right">
          <div class="col m12">
            <br />
            <a href="rate-area-2.php"><button class="btn waves-effect waves-light background-orange" type="submit" name="action">Gå til bedømmelse</button></a>
          </div>
        </div>
      </div>

      <br />
      <br />
      <br />
      <br />
      <br />

      <div class="background-blue">
        &nbsp;
        <p class="container white-text center-align">© Safemove 2017. Alle rettigheder forbeholdes.</p>
        &nbsp;
      </div>


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
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMl37AbpRK06nHLLGmxYUb51MycTi0fAo&libraries=places&callback=initAutocomplete"
          async defer></script>
