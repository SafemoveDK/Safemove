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

      <div id="fb-root"></div>

  <script>
    window.fbAsyncInit = function() {
        FB.init({
            appId   : '1225418490911338',
            oauth   : true,
            status  : true, // check login status
            cookie  : true, // enable cookies to allow the server to access the session
            xfbml   : true // parse XFBML
        });

      };

    function fb_login(){
        FB.login(function(response) {

            if (response.authResponse) {
                console.log('Welcome!  Fetching your information.... ');
                //console.log(response); // dump complete info
                access_token = response.authResponse.accessToken; //get access token
                user_id = response.authResponse.userID; //get FB UID

                FB.api('/me', function(response) {
                    user_email = response.email; //get user email
              // you can store this data into your database
                });

            } else {
                //user hit cancel button
                console.log('User cancelled login or did not fully authorize.');

            }
        }, {
            scope: 'publish_stream,email'
        });
    }
    (function() {
        var e = document.createElement('script');
        e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
        e.async = true;
        document.getElementById('fb-root').appendChild(e);
    }());
  </script>

    <div id="status">
    </div>

    <!-- Header -->
    <?php include 'header.php';?>

    <!-- Login modal -->
    <div id="login-modal" class="modal modal-fixed-footer">

        <div class="modalheader">
          &nbsp;
          <h4 class="center">Log ind</h4>
        </div>

        <div id="loginmodal">

          <form id="loginform" name="loginform" method="post" action="index.html">
            &nbsp;

            <div class="container">
              <div class="row">
                <div class="col s12">
                  <label for="email" class="safemove-blue">Email:</label>
                  <input type="email" name="email" id="email" class="txtfield safemove-blue" tabindex="1" required>
                </div>
                <div class="col s12">
                  <label for="password" class="safemove-blue">Adgangskode:</label>
                  <input type="password" name="password" id="password" class="txtfield safemove-blue" tabindex="2" required>
                </div>
              </div>
            </div>

            <div class="row center">
              <div class="col m12">
                <button class="btn waves-effect waves-light background-orange" type="submit" name="action">Log ind</button>
              </div>
            </div>

          </form>

          <div class="row center">
            <p class="safemove-blue center">ELLER</p>
            <a class="waves-effect waves-light btn facebook-blue" href="#" onclick="fb_login();">
            <i class="fa fa-facebook-square left"></i>Log ind med Facebook</a>
          </div>

        </div>

    </div>

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

    <!-- Rate your area section -->
    <div id="rate-area-login" class="rate-area-login center">
      <br />
      <br />
      <div class="row">
        <a class="waves-effect waves-light btn facebook-blue" href="#" onclick="fb_login();">
        <i class="fa fa-facebook-square left"></i>Log ind med Facebook</a>
        <a class="waves-effect waves-light btn background-orange" href="#create-user-modal">
        <i class="material-icons left">perm_identity</i>Opret bruger</a>
      </div>
    </div>

    <!-- Create user modal -->
    <div id="create-user-modal" class="modal modal-fixed-footer">

        <div class="modalheader">
          <br />
          <h4 class="center">Opret bruger</h4>
        </div>

        <div id="loginmodal">
          <form id="loginform" name="loginform" method="post" action="createuserdb.php">
            <br />
            <div class="container">

              <div class="row">
                
                <div class="col s6">
                  <label for="fname" class="safemove-blue">Fornavn:</label>
                  <input type="text" name="fname" id="fname" class="txtfield safemove-blue" tabindex="1" required>
                </div>
                
                <div class="col s6">
                  <label for="lname" class="safemove-blue">Efternavn:</label>
                  <input type="text" name="lname" id="lname" class="txtfield safemove-blue" tabindex="2" required>
                </div>
                
                <div class="col s12">
                  <label for="birthdate" class="safemove-blue">Fødselsdato:</label>
                  <input type="date" name="birthdate" id="birthdate" class="txtfield safemove-blue" tabindex="3" required>
                </div>
                
                <div class="col s12">
                  <label for="email" class="safemove-blue">Email:</label>
                  <input type="email" name="email" id="email" class="txtfield safemove-blue" tabindex="4" required>
                </div>
                
                <div class="col s6">
                  <label for="password" class="safemove-blue">Adgangskode:</label>
                  <input type="password" name="password" id="password" class="txtfield safemove-blue" tabindex="5" required>
                </div>
                
                <div class="col s6">
                  <label for="password" class="safemove-blue">Bekræft adgangskode:</label>
                  <input type="password" name="confpassword" id="confpassword" class="txtfield safemove-blue" tabindex="6" required>
                </div>
                
              </div>

            </div>
            <div class="modal-footer">
              <button class="modal-action modal-close btn-flat white-text background-orange">Opret bruger</button>
            </div>
          </form>
        </div>


    </div>

    <div id="safemove-community" class="container">
      <div class="section">

        <div class="row">
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center safemove-orange"><i class="fa fa-heart"></i></h2>
              <h5 class="center safemove-blue">Ratere</h5>

              <p align="justify" class="light safemove-blue">Du er som rater en essentiel del af Safemove-community. Det er dig, som skal gøre din ekspertise om dit boligområde tilgængelig. Tilgængeligheden af din og dine naboers mening, vil hjælpe søgerene i Safemove-community, til at skabe et retvisende billede af jeres boligområde. Din mening vil derfor hjælpe dine kommende naboer med at vælge det perfekte boligområde for dem. </p>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center safemove-orange"><i class="fa fa-info"></i></h2>
              <h5 class="center safemove-blue">Information</h5>

              <p align="justify" class="light safemove-blue">Den information som du kan hente i Safemove-community er både subjektive og objektive information. Den subjektive information, er den som er konstrueret af vores rater og den objektive information er data, som Safemove har hentet og inkorporeret i kort, således at det bliver nemt og enkelt at se din kommende boligs placering i forhold fx skolemuligheder i området.</p>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center safemove-orange"><i class="fa fa-search"></i></h2>
              <h5 class="center safemove-blue">Søgere</h5>

              <p align="justify" class="light safemove-blue">Du har som en søger i Safemove-community mulighed for, helt gratis, at søge information om dit kommende boligområde. Dette vil give dig bedre indsigt i hvordan det er at bo i det pågældende boligområde og hvordan dit boligområde ligger i forhold til fx skolemuligheder. Du kan dermed finde det boligområde der er det bedste match iforhold til dine personlige præferencer.</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div id="kontakt-os" class="background-blue">
      <p class="contact-headline center">Du er altid velkommen til at kontakte os</p>
      <div class="container">

        <div class="row">
          <form action="mail.php" method="POST" class="col s12">
            <div class="row">

              <div class="row">
                <div class="input-field col s6">
                  <input  id="name" name="name" type="text" class="validate" required>
                  <label for="name">Navn</label>
                </div>
                <div class="input-field col s6">
                  <input id="email" name="email" type="text" class="validate" required>
                  <label for="email">E-mail</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <textarea id="message" name="message" class="materialize-textarea" required></textarea>
                  <label for="message">Besked til Safemove</label>
                </div>
              </div>

              <div class="row">
                <div class="col m12">
                  <button class="btn waves-effect waves-light background-orange" type="submit" name="action">Send besked
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>

            </div>
          </form>
        </div>

      </div>
    </div>

    <div>
      <?php include 'footer.php';?>
    </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    </body>
  </html>
    <script>
        $('#create-user-modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
        console.log(modal, trigger);
      },// Callback for Modal close
    }
  );

      $('#login-modal').modal({
    dismissible: true, // Modal can be dismissed by clicking outside of the modal
    opacity: .5, // Opacity of modal background
    ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
      console.log(modal, trigger);
    },// Callback for Modal close
    }
    );
    </script>
