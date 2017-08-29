
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
            <i class="material-icons circle red">play_arrow</i>
            <span class="title"><?php echo $safety ?></span>
            <p class="light">- I hvilken grad føler du dig tryg, når du færdes i dit boligområde?</p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
          </li>
         <li class="collection-item avatar">
           <i class="material-icons circle red">play_arrow</i>
           <span class="title"><?php echo $noiseLevel ?></span>
           <p class="light">- I hvilken grad føler du, at støjen i dit boligområde generer dig når du befinder dig på din adresse, samt færdes i dit boligområde?</p>
           <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
         </li>
         <li class="collection-item avatar">
           <i class="material-icons circle red">play_arrow</i>
           <span class="title"><?php echo $neighborhood ?></span>
           <p class="light">- Hvor let føler du, at du kan komme i kontakt og omgås dine naboer, samt hvorledes opfatter du mulighederne for at få en hjælpende hånd?</p>
           <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
         </li>
         <li class="collection-item avatar">
           <i class="material-icons circle red">play_arrow</i>
           <span class="title"><?php echo $onlineConnections ?></span>
           <p class="light">- Hvor tilfreds er du med dine online signaler (internet -, tv - og mobilsignaler)?</p>
           <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
         </li>
         <li class="collection-item avatar">
           <i class="material-icons circle red">play_arrow</i>
           <span class="title"><?php echo $childFriendly ?></span>
           <p class="light">- I hvilken grad føler du, at der er muligheder for børn (legeplads, fodboldbaner, kælkebakker mm.), samt hvor tryg er du ved at sende dine børn ud i boligområdet?</p>
           <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
         </li>
         <li class="collection-item avatar">
           <i class="material-icons circle red">play_arrow</i>
           <span class="title"><?php echo $reconmendation ?></span>
           <p class="light">- Hvor villig vil du være til at anbefale dit boligområde til andre?</p>
           <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
         </li>
         <li class="collection-item avatar">
           <i class="material-icons circle red">play_arrow</i>
           <span class="title"><?php echo $parking ?></span>
           <p class="light">- I hvilken grad føler du, at der er mulighed for at finde en parkeringsplads i dit boligområde? <br />
           Tidsbegrænset? Betaling? Gratis?
           </p>
           <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
         </li>
         <li class="collection-item avatar">
           <i class="material-icons circle red">play_arrow</i>
           <span class="title"><?php echo $cleanEnvironment ?></span>
           <p class="light">- Hvor renholdt opfatter du dit boligområde?</p>
           <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
         </li>
         <li class="collection-item avatar">
           <i class="material-icons circle red">play_arrow</i>
           <span class="title"><?php echo $cozyness ?></span>
           <p class="light">- Hvor hyggeligt opfatter du dit boligområde, hvis du fx. går en aftentur eller sidder på en bænk?</p>
           <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
         </li>
         <li class="collection-item avatar">
           <i class="material-icons circle red">play_arrow</i>
           <span class="title"><?php echo $moderniseringsgrad ?></span>
           <p class="light">- I hvilken grad føler du, at dit boligområde fremstår nyt og moderne?</p>
           <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
         </li>
         <li class="collection-item avatar">
           <i class="material-icons circle red">play_arrow</i>
           <span class="title"><?php echo $satisfaction1 ?></span>
           <p class="light">- Hvor tilfreds er du overordnet med dit boligområde?</p>
           <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
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
