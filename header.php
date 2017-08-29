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
      
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

      <!--Import css og js for progressbar-->
      <link type="text/css" href="/loading-bar/loading-bar.css" rel="stylesheet">
      <script type="text/javascript" src="/loading-bar/loading-bar.js"></script>
    </head>

    <body>

      <nav>
        <div class="nav-wrapper">
          <a href="index.php"><img src="img/logo.png"  style="height:60px"></a>
          <ul id="nav-mobile" class="right" >
            <li><a id = "community-click" class="safemove-blue">Safemove-community</a></li>
            <li><a id = "kontakt-click" class="safemove-blue">Kontakt os</a></li>
            <li><a class="safemove-blue" href="#create-user-modal">Opret bruger</a></li>
            <li><a class="waves-effect waves-light btn background-orange"  href="#login-modal">Login</a></li>
          </ul>
        </div>
      </nav>

    <!-- Login modal -->
    <div id="login-modal" class="modal modal-fixed-footer">

        <div class="modalheader">
          <br />
          <h4 class="center white-text">Log ind</h4>
          &nbsp;
          
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


      <!-- Create user modal -->
    <div id="create-user-modal" class="modal modal-fixed-footer">

        <div class="modalheader">
          <br />
          <h4 class="center white-text">Opret bruger</h4>
        </div>

        <div id="loginmodal">
          <form id="loginform" name="loginform" method="post" action="createuserdb1.php">
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
            <div align = "right" style = "padding-right: 25px; padding-bottom: 10px">
              <button class="modal-action modal-close btn white-text background-orange">Opret bruger</button>
            </div>
          </form>
        </div>


    </div>
    
    <script type="text/javascript">
      $('#login-modal').modal({
        dismissible: true, // Modal can be dismissed by clicking outside of the modal
        opacity: .5, // Opacity of modal background
        ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
          console.log(modal, trigger);
        },// Callback for Modal close
        }
      );

      $('#create-user-modal').modal({
          dismissible: true, // Modal can be dismissed by clicking outside of the modal
          opacity: .5, // Opacity of modal background
          ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
            console.log(modal, trigger);
          },// Callback for Modal close
        }
      );
    </script>

    <script>
      $(document).ready(function (){
            $("#community-click").click(function (){
                $('html, body').animate({
                    scrollTop: $("#safemove-community").offset().top
                }, 1500);
            });
        });

      $(document).ready(function (){
            $("#kontakt-click").click(function (){
                $('html, body').animate({
                    scrollTop: $("#kontakt-os").offset().top
                }, 1500);
            });
        });
    </script>