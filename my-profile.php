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

      <!-- Header -->
      <?php include 'header.php';?>

      <div class="background-blue">
        <h3 class="rate-header center">Min profil</h3>
      </div>


      <div class="container center">

        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s6"><a href="#personalInfo">Personlige oplysninger</a></li>
                    <li class="tab col s6"><a class="active" href="#myRatings">Mine ratings</a></li>
                </ul>
            </div>
            
            <div id="personalInfo" class="col s12">
                <br />
                <div align="left" class="">
                    <div class="row">
                      <div class="col s4">
                        <label class="active safemove-blue" for="mp_name">Fulde navn:</label>
                        <input disabled value="Sofie Pedersen" id="mp_name" class="txtfield safemove-blue" type="text" class="validate">
                      </div>
                    </div>
                   
                   
                  <div class="row">
                    <div class="col s4">
                      <label class="active safemove-blue" for="mp_birthdate">Fødselsdato:</label>
                      <input disabled value="01/01/1990" id="mp_birthdate" class="txtfield" type="text" class="validate">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col s4">
                      <label class="active safemove-blue" for="mp_email">Email:</label>
                      <input disabled value="sofiepedersen@hotmail.com" id="mp_email" class="txtfield" type="email" class="validate">
                    </div>
                  </div>
                  
                  <div>
                    <a class="waves-effect waves-light btn background-orange" href="#change-password">Skift adgangskode</a>
                  </div>
                  
                  <!-- Create user modal -->
                <div id="change-password" class="modal modal">
            
                    <div class="modalheader">
                      <br />
                      <h4 class="center">Opret bruger</h4>
                    </div>
            
                    <div id="changepassmodal">
                      <form id="changepassform" name="changepassform" method="post" action=".php">
                        <br />
                        <div class="container">
            
                          <div class="row">
                            
                            <div class="col s12">
                              <label for="password" class="safemove-blue">Nuværende adgangskode:</label>
                              <input type="password" name="password" id="password" class="txtfield safemove-blue" tabindex="5" required>
                            </div>
            
                            <div class="col s12">
                              <label for="password" class="safemove-blue">Ny adgangskode:</label>
                              <input type="password" name="newpassword" id="newpassword" class="txtfield safemove-blue" tabindex="5" required>
                            </div>
            
                            <div class="col s12">
                              <label for="password" class="safemove-blue">Bekræft ny adgangskode:</label>
                              <input type="password" name="confnewpassword" id="confnewpassword" class="txtfield safemove-blue" tabindex="6" required>
                            </div>
            
                          </div>
            
                        </div>
                        <div class="modal-footer">
                          <button class="modal-action modal-close btn-flat white-text background-orange">Skift adgangskode</button>
                        </div>
                      </form>
                    </div>
            
            
                </div>
                </div>
            </div>
            
            <div id="myRatings" class="col s12">Mine ratings</div>

        </div>
        
      </div>

      <br />
      <br />
      <br />

      <div class="background-blue">
        &nbsp;
        <p class="container white-text center-align">© Safemove 2017. Alle rettigheder forbeholdes.</p>
        &nbsp;
      </div>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

    </body>
  </html>
  
  <script>
    $('#change-password').modal({
        dismissible: true, // Modal can be dismissed by clicking outside of the modal
        opacity: .5, // Opacity of modal background
        ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
          console.log(modal, trigger);
        },// Callback for Modal close
        }
      );
  </script>