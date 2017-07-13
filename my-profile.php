
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
                  
                  <!-- Change password modal -->
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
            
            <div id="myRatings" class="col s12">
              <?php
                $street_name = "Danmarksgade 9, 9000 Aalborg";
              ?>
              <ul class="collapsible" data-collapsible="accordion">
                <li>
                  <div class="collapsible-header ">
                    <i class="material-icons">filter_drama</i><div align="left" class="col s9"><?php echo $street_name?> </div>
                  </div>
                  
                  <div class="collapsible-body">
                    <div class="row center">
                      <div class="col s6 right-border">
                        <p>PARAMETER 1</p>
                        <p>PARAMETER 3</p>
                        <p>PARAMETER 5</p>
                        <p>PARAMETER 7</p>
                      </div>
            
                      <div class="col s6">
                        <p>PARAMETER 2</p>
                        <p>PARAMETER 4</p>
                        <p>PARAMETER 6</p>
                        <p>PARAMETER 8</p>
                      </div>
                    </div>
                  </div>
                  
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                  <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                  <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
              </ul>
              
            </div>

        </div>
        
      </div>

      <br />
      <br />
      <br />
  
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
    
    <!-- Footer -->
    <?php include 'footer.php';?>