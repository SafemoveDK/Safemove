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
                    <li class="tab col s6"><a class="active" href="#personalInfo">Personlige oplysninger</a></li>
                    <li class="tab col s6"><a href="#myRatings">Mine ratings</a></li>
                </ul>
            </div>
            <div id="personalInfo" class="col s12">
                <br />
                <div align="left" class="my-profile-box">
                   <br />
                   bla bla bla 
                </div>
            </div>
            <div id="myRatings" class="col s12">Mine ratings</div>

        </div>
        
      </div>

      <br />

      <div class="container">
        <div class="row right">
          <div class="col m12">
            <br />
            <a href="min-profil.php"><button class="btn waves-effect waves-light background-orange" type="submit" name="action">Gå til min profil</button></a>
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

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

    </body>
  </html>