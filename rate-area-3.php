
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

<div class="container">
  <div class="row right">
    <div class="col m12">
      <br />
      <a href="#whyratemodal"><button class="btn waves-effect waves-light background-orange" type="submit" name="action">Gå til min profil</button></a>
    </div>
  </div>
</div>

<br />
<br />
<br />
<br />
<br />

<div id="whyratemodal" class="modal modal-fixed-footer">

  <div class="modalheader">
    <br />
    <h4 class="center">Noget vigtigt</h4>
  </div>

  <div id="whyratemodal">
    <form id="whyrateform" name="whyrateform" method="post" action="my-profile.php">
      <br />
      <div class="container">

        <div class="row">

          <div class="col s6">
            <label for="fname" class="safemove-blue">Hvorfor har du rated?</label>
            <input type="text" name="whyrate" id="whyrate" class="txtfield safemove-blue" tabindex="1" required>
          </div>

        </div>

      </div>
      <div align = "right" style = "padding-right: 20px; padding-top: 5px">
        <button class="modal-action modal-close btn-flat white-text background-orange">Opret bruger</button>
      </div>
    </form>
  </div>


    </div>

  <script type="text/javascript">
      $('#whyratemodal').modal({
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
