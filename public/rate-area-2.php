
      <!-- Header -->
      <?php include 'header.php';?>
      <?php include 'parameterList.php';?>

      <div class="background-blue">
        <h3 class="rate-header center">Bedøm dit område</h3>
        <div class="progress background-orange-saturated">
          <div class="determinate" style="width: 66%"></div>
        </div>
      </div>

      <div class="container">

        <ul class="collection">
          <li class="collection-item avatar">
            <i class="circle background-light-blue fa fa-shield"></i>
            <span class="title"><?php echo $safety ?></span>
            <div class="row">
              <p class="col s8 light">I hvilken grad føler du dig tryg, når du færdes i dit boligområde?</p>
            </div>
          </li>
         <li class="collection-item avatar">
           <i class="circle background-light-blue fa fa-bullhorn"></i>
           <span class="title"><?php echo $noiseLevel ?></span>
           <div class="row">
             <p class="col s8 light">I hvilken grad føler du, at støjen i dit boligområde generer dig når du befinder dig på din adresse, samt færdes i dit boligområde?</p>
           </div>
         </li>
         <li class="collection-item avatar">
           <i class="circle background-light-blue fa fa-home"></i>
           <span class="title"><?php echo $neighborhood ?></span>
           <div class="row">
             <p class="col s8 light">Hvor let føler du, at du kan komme i kontakt og omgås dine naboer, samt hvorledes opfatter du mulighederne for at få en hjælpende hånd?</p>
           </div>
         </li>
         <li class="collection-item avatar">
           <i class="circle background-light-blue fa fa-wifi"></i>
           <span class="title"><?php echo $onlineConnections ?></span>
           <div class="row">
             <p class="col s8 light">Hvor tilfreds er du med dine online signaler (internet -, tv - og mobilsignaler)?</p>
           </div>
         </li>
         <li class="collection-item avatar">
           <i class="circle background-light-blue fa fa-child"></i>
           <span class="title"><?php echo $childFriendly ?></span>
           <div class="row">
             <p class="col s8 light">I hvilken grad føler du, at der er muligheder for børn (legeplads, fodboldbaner, kælkebakker mm.), samt hvor tryg er du ved at sende dine børn ud i boligområdet?</p>
           </div>
         </li>
         <li class="collection-item avatar">
           <i class="circle background-light-blue fa fa-heart"></i>
           <span class="title"><?php echo $recommendation ?></span>
           <div class="row">
             <p class="col s8 light">Hvor villig vil du være til at anbefale dit boligområde til andre?</p>
           </div>
         </li>
         <li class="collection-item avatar">
           <i class="circle background-light-blue fa fa-car"></i>
           <span class="title"><?php echo $parking ?></span>
           <div class="row">
             <p class="col s8 light">I hvilken grad føler du, at der er mulighed for at finde en parkeringsplads i dit boligområde? <br />
              Tidsbegrænset? Betaling? Gratis?
             </p>
           </div>
         </li>
         <li class="collection-item avatar">
           <i class="circle background-light-blue fa fa-leaf"></i>
           <span class="title"><?php echo $cleanEnvironment ?></span>
           <div class="row">
             <p class="col s8 light">Hvor renholdt opfatter du dit boligområde?</p>
           </div>
         </li>
         <li class="collection-item avatar">
           <i class="circle background-light-blue fa fa-coffee"></i>
           <span class="title"><?php echo $cozyness ?></span>
           <div class="row">
             <p class="col s8 light">Hvor hyggeligt opfatter du dit boligområde, hvis du fx. går en aftentur eller sidder på en bænk?</p>
           </div>
         </li>
         <li class="collection-item avatar">
           <i class="circle background-light-blue fa fa-building"></i>
           <span class="title"><?php echo $style ?></span>
           <div class="row">
             <p class="col s8 light">Er bygningsstilen i dit område klassisk eller moderne?</p>
           </div>
         </li>
         <li class="collection-item avatar">
           <i class="circle background-light-blue fa fa-smile-o"></i>
           <span class="title"><?php echo $condition ?></span>
           <div class="row">
             <p class="col s8 light">I hvilken stand er bygningerne i dit område, slidt eller nyrenoveret?</p>
           </div>
         </li>
       </ul>

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
