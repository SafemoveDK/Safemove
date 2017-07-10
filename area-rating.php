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

      <?php
          $street_name = "Danmarksgade 9, 9000 Aalborg";
      ?>

        <div class="row">
          <div class="overall-rating col s9 background-blue">
            <i class="material-icons prefix safemove-orange">insert_chart</i>
            <a class="safemove-orange">Overall rating for: </a><a class="white-text"><?php echo $street_name ?></a>
          </div>

          <a href="rate-area-1.php" class="white-text">
            <div class="rate-area col s3 background-orange center">Bedøm området
            <i class="material-icons prefix white-text">play_arrow</i>
            </div>
          </a>
        </div>

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

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

    </body>
  </html>
