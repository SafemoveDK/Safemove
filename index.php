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
      <meta charset="iso-8859-1"
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>Safemove</title>
    </head>

  <body>
      <div id="fb-root"></div>
<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
  }

  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '{1225418490911338}',
    cookie     : true,  // enable cookies to allow the server to access
                        // the session
    xfbml      : true,  // parse social plugins on this page
    oauth      : true,
    version    : 'v2.8' // use graph api version 2.8
  });

  // Now that we've initialized the JavaScript SDK, we call
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/da_DK/sdk.js#xfbml=1&version=v2.9&appId=1225416990911488";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

<!--<fb:login-button data-scope="public_profile,email" data-onlogin="checkLoginState();">
</fb:login-button> -->

  <div id="status">
  </div>

    <!-- Header -->
    <?php include 'header.php';?>

    <!-- Cover -->
    <div class = "cover-img responsive-img">
    <br />
    <br />
    <br />
      <h2 class="cover-text">FLYT MED TRYGHED</h2>
      <h4 class="cover-text">Se hvad folk synes om dit kommende boligområde</h4>

      <!-- Search box -->
      <div id="searchbox">
        <form>
          <div class="input-field nav-wrapper">
            <input id="search" type="search" required>
            <label class="label-icon textopacity" for="search"><i class="material-icons">search</i></label>
          </div>
        </form>
      </div>

    </div>
    <!-- Frontpage facbook login and rate area -->
    <div class="rate-area-login center">
      <!-- <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div> -->
      <div class="row">
        <a class="waves-effect waves-light btn social facebook">
        <i class="fa fa-facebook"></i> Sign in with facebook</a>
        <a class="waves-effect waves-light btn create-user-btn">
        <i class="material-icons left">perm_identity</i>Opret bruger</a>
      </div>
    </div>

    <!-- Login modal -->
    <div id="modal1" class="modal modal-fixed-footer">
      <div class="modal-content">
        <div class="modalheader">
          <h4>Modal Header</h4>
        </div>
        <div id="loginmodal" style="display:none;">
          <h1>Opret bruger</h1>
          <form id="loginform" name="loginform" method="post" action="index.html">
            <label for="username">Fornavn:</label>
            <input type="text" name="username" id="username" class="txtfield" tabindex="1">

            <label for="birthdate">Fødselsdato:</label>
            <input type="number" name="birthdate" id="birthdate" class="txtfield" tabindex="2">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="txtfield" tabindex="3">

            <label for="password">Adgangskode:</label>
            <input type="password" name="password" id="password" class="txtfield" tabindex="4">

            <label for="area">Vejnavn:</label>
            <input type="text" name="area" id="area" class="txtfield" tabindex="5">

            <label for="phonenumber">Telefonnummer:</label>
            <input type="tel" name="phonenumber" id="phonenumber" class="txtfield" tabindex="3">

            <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="Log In" tabindex="3"></div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close btn-flat ">Agree</a>
      </div>
    </div>

    <div class="container">
      <div class="section">

        <!--   Icon Section   -->
        <div class="row">
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center safemove-orange"><i class="fa fa-heart"></i></h2>
              <h5 class="center safemove-blue">Ratere</h5>

              <p class="light safemove-blue">Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. Lorem Ipsum har været standard fyldtekst siden 1500-tallet, hvor en ukendt trykker sammensatte en tilfældig spalte for at trykke en bog til sammenligning af forskellige skrifttyper. Lorem Ipsum har ikke alene overlevet fem århundreder, men har også vundet indpas i elektronisk typografi uden væsentlige ændringer.</p>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center safemove-orange"><i class="fa fa-info"></i></h2>
              <h5 class="center safemove-blue">Information</h5>

              <p class="light safemove-blue">Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. Lorem Ipsum har været standard fyldtekst siden 1500-tallet, hvor en ukendt trykker sammensatte en tilfældig spalte for at trykke en bog til sammenligning af forskellige skrifttyper. Lorem Ipsum har ikke alene overlevet fem århundreder, men har også vundet indpas i elektronisk typografi uden væsentlige ændringer.</p>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center safemove-orange"><i class="fa fa-search"></i></h2>
              <h5 class="center safemove-blue">Søgere</h5>

              <p class="light safemove-blue">Lorem Ipsum er ganske enkelt fyldtekst fra print- og typografiindustrien. Lorem Ipsum har været standard fyldtekst siden 1500-tallet, hvor en ukendt trykker sammensatte en tilfældig spalte for at trykke en bog til sammenligning af forskellige skrifttyper. Lorem Ipsum har ikke alene overlevet fem århundreder, men har også vundet indpas i elektronisk typografi uden væsentlige ændringer.</p>
            </div>
          </div>
        </div>

      </div>
      <br><br>
    </div>

    <div class=background-blue>
      <div class="container">
        <p class="center">Du er altid velkommen til at kontakte os</p>
      </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    </body>
  </html>
        <script>
        $('#modal1').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
        console.log(modal, trigger);
      },// Callback for Modal close
    }
  );
      </script>
