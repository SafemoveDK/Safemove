
      <!-- Header -->
      <?php include 'header.php';?>
      <?php include 'parameterList.php';?>

      <div class="background-blue">
        <h3 class="rate-header center">Bedøm dit område</h3>
        <div class="progress">
          <div class="determinate" style="width: 66%"></div>
        </div>
      </div>

      <div class="container">

        <table class="striped">
          <thead>
            <tr>
                <th>Parameter</th>
                <th class="center">Rating</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td><?php echo $safety ?></td>
              <td class="center">1-5</td>
            </tr>

            <tr>
              <td><?php echo $noiseLevel ?></td>
              <td class="center">1-5</td>
            </tr>

            <tr>

              <td><?php echo $neighborhood ?></td>
              <td class="center">1-5</td>
            </tr>

            <tr>

              <td><?php echo $infrastructur ?></td>
              <td class="center">1-5</td>
            </tr>

            <tr>
              <td><?php echo $childFriendly ?></td>
              <td class="center">1-5</td>
            </tr>

            <tr>
              <td><?php echo $reconmendation ?></td>
              <td class="center">1-5</td>
            </tr>

            <tr>
              <td><?php echo $parking ?></td>
              <td class="center">1-5</td>
            </tr>

            <tr>
              <td><?php echo $cleanEnvironment ?></td>
              <td class="center">1-5</td>
            </tr>

            <tr>
              <td><?php echo $cozyness ?></td>
              <td class="center">1-5</td>
            </tr>

            <tr>
              <td><?php echo $moderniseringsgrad ?></td>
              <td class="center">1-5</td>
            </tr>

            <tr>
              <td><?php echo $satisfaction ?></td>
              <td class="center">1-5</td>
            </tr>
          </tbody>
        </table>

      </div>

      <div class="container">
        <div class="row right">
          <div class="col m12">
            <br />
            <a href="rate-area-3.php"><button class="btn waves-effect waves-light background-orange" type="submit" name="action">Gennemfør bedømmelse</button></a>
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