
      <!-- Header -->
      <?php include 'header.php';?>

      <div class="background-blue">
        <h3 class="rate-header center">Bedøm dit område</h3>
        <div class="progress">
          <div class="determinate" style="width: 100%"></div>
        </div>
      </div>

      <?php
          $first_name = "Zaki";
      ?>

      <div class="container center">

        <i class="material-icons check-icon safemove-orange">done</i>
        <h5><b>Tillykke <?php echo $first_name ?>!</b></h5>
        <br />
        <h5>Du har nu foretaget din bedømmelse. Tak og ha' en god dag :-)</h5>
      </div>

      <br />
      <br />

      <div class="container">
        <div class="row right">
          <div class="col m12">
            <br />
            <a href="my-profile.php"><button class="btn waves-effect waves-light background-orange" type="submit" name="action">Gå til min profil</button></a>
          </div>
        </div>
      </div>

      <br />
      <br />
      <br />
      <br />
      <br />

     <!-- Footer -->
    <?php include 'footer.php';?>
