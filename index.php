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
        <div class="center">
          <a class="waves-effect waves-light btn facebook-blue" href="#" onclick="fb_login();">
          <i class="fa fa-facebook-square left"></i>Log ind med Facebook</a>

          <a class="waves-effect waves-light btn background-orange"  href="#create-user-modal">
          <i class="material-icons left" >perm_identity</i>Opret bruger</a>
        </div>

      </div>
    </div>

    <div id="safemove-community" class="container">
      <div class="section">

        <div class="row">
          <div class="col s4 m4">
            <div class="icon-block">
              <h2 class="center safemove-orange"><i class="fa fa-heart"></i></h2>
              <h5 class="center safemove-blue">Ratere</h5>

              <p align="justify" class="light safemove-blue">Du er som rater en essentiel del af Safemove-community. Det er dig, som skal gøre din ekspertise om dit boligområde tilgængelig. Tilgængeligheden af din og dine naboers mening, vil hjælpe søgerene i Safemove-community, til at skabe et retvisende billede af jeres boligområde. Din mening vil derfor hjælpe dine kommende naboer med at vælge det perfekte boligområde for dem. </p>
            </div>
          </div>

          <div class="col s4 m4" >
            <div class="icon-block">
              <h2 class="center safemove-orange"><i class="fa fa-info"></i></h2>
              <h5 class="center safemove-blue">Information</h5>

              <p align="justify" class="light safemove-blue">Den information som du kan hente i Safemove-community er både subjektive og objektive information. Den subjektive information, er den som er konstrueret af vores rater og den objektive information er data, som Safemove har hentet og inkorporeret i kort, således at det bliver nemt og enkelt at se din kommende boligs placering i forhold fx skolemuligheder i området.</p>
            </div>
          </div>

          <div class="col s4 m4">
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


    <!-- Footer -->
    <?php include 'footer.php';?>
