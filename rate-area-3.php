
<!-- Header -->
<?php include 'header.php';?>

<div class="background-blue">
  <h3 class="rate-header center">Bedøm dit område</h3>
  <div class="progress background-orange-saturated">
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

<form id="whyrateform" name="whyrateform" method="post" action="area-rating.php">
  <div class="container">
    <div class="row">
      <div class="col m12">
        <div class="col s6">
          <label for="fname" class="safemove-blue">Hvorfor har du rated?</label>
          <input type="text" name="whyrate" id="whyrate" class="txtfield safemove-blue" tabindex="1" required>
        </div>
        <br />
        <div align = "right" style = "padding-right: 20px; padding-top: 5px">
          <button class="btn-flat white-text background-orange">Gå til det bedømte område</button>
        </div>
        
      </div>
    </div>
  </div>
</form>

     <!-- Footer -->
    <?php include 'footer.php';?>
