<!DOCTYPE html>
  <html>
    <head>
    </head>

    <body>

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
    </body>

  </html>
