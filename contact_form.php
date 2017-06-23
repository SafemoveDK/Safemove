<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import Font Awesome-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="style.css"/>
      <meta charset="iso-8859-1"
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title></title>
    </head>

    <body>
      <div class="container">

        <div class="row">
          <form class="col s12">
            <div class="row">

              <div class="row">
                <div class="input-field col s6">
                    <input  id="name" type="text" class="validate">
                    <label for="name">Navn</label>
                </div>
                <div class="input-field col s6">
                    <input id="mail" type="text" class="validate">
                    <label for="mail">E-mail</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <textarea id="message" class="materialize-textarea"></textarea>
                  <label for="message">Besked til Safemove</label>
                </div>
              </div>

              <div class="row">
                <div class="col m12">
                  <button class="btn waves-effect waves-light" type="submit" name="action">Send besked
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>

            </div>
          </form>
        </div>
      </div>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    </body>

  </html>