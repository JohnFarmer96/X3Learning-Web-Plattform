<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include($IPATH."/_assets/html/meta.html") ?>

    <title>X3Learning</title>

    <style type="text/css">
      .bottom { 
        position: absolute;     
        width: 100%;             
        bottom:0;                                                
      } 

      /** Copy over due to Chrome Issues */
      .bg-transparent {
        background: none !important; }

      .btn-info {
        color: #fff;
        background-color: #606060;
        border-color: #606060; }
        .btn-info:hover {
          color: #fff;
          background-color: #323232;
          border-color: #141414; }
        .btn-info:focus, .btn-info.focus {
          box-shadow: 0 0 0 2px rgba(159, 134, 255, 0.5); }
        .btn-info.disabled, .btn-info:disabled {
          background-color: #606060;
          border-color: #606060; }
        .btn-info:active, .btn-info.active,
        .show > .btn-info.dropdown-toggle {
          color: #fff;
          background-color: #323232;
          background-image: none;
          border-color: #141414; }
    </style>
  </head>
  <body class="with-top-navbar">
          
    <?php include($IPATH."/_assets/html/header-view.html") ?>

    <!--- TEAM JUMBOTRON --->
    <div class="jumbotron-fluid my-5 py-5" style="background-image: url('/_assets/img/jumbotron/main-1.png'); background-size: cover; background-position: center; min-height: 600px;">
      <div class="container my-5">
        <div class="row">
          <div class="col-md-9 mx-3">
            <p class="text-left text-uppercase font-weight-normal text-8w my-4">X&hairsp;<sup>3</sup> Learning</p>
            <p class="text-left text-4w mb-3">Ein Team Mit Visionen</p>
            <p class="text-left lead">Wir träumen von einer Welt, in der Jeder und Jede gleichwertige Bildungschancen genießt. Darum bilden wir Learning Coaches aus, die Schülerinnen und Schüler begleiten und dazu befähigen, eigenständig erfolgreich zu lernen.</p>
            <button type="button" id="forward-jumbo" class="btn btn-secondary btn-lg btn-pill float-left mt-3">Unser Konzept</button>
          </div>
        </div>
      </div>
    </div>

    <!--- OUR TEAM --->
    <div class="hr-divider">
      <h3 class="hr-divider-content hr-divider-heading text-3w">
          Das Team hinter X&hairsp;<sup>3</sup>Learning
      </h3>
    </div>

    <div class="container my-5">

      <div class="row align-items-center justify-content-center my-3" id="micha">
        <div class="col-md-4">
          <img class="img-fluid mx-auto px-5" src="/_assets/img/team/micha-orth.png">
        </div>
        <div class="col-md-6">
          <div class="lead text-left">
            <span class="h2">Micha Orth</span><br>
            <span>CEO und Gründer von X&hairsp;<sup>3</sup>Learning</span><br>
            <span>M.A., Intercultural Leadership</span><br>
            <span class="text-muted">Berlin</span>
          </div>
        </div>
      </div>

      <div class="row align-items-center justify-content-center my-3" id="tabitha">
        <div class="col-md-4 order-md-last">
          <img class="img-fluid mx-auto px-5" src="/_assets/img/team/tabitha-schulz.png">
        </div>
        <div class="col-md-6 order-md-first">
          <div class="lead text-right">
            <span class="h2">Tabitha Schultz</span><br>
              X&hairsp;<sup>3</sup>Learning Partner<br>
              Gymnasiallehrerin für Englisch und Religion<br>
              <span class="text-muted">Berlin</span>
          </div>
        </div>
      </div>

      <div class="row align-items-center justify-content-center my-3" id="mcmurray">
        <div class="col-md-4">
          <img class="img-fluid mx-auto px-5" src="/_assets/img/team/mcmurray.png">
        </div>
        <div class="col-md-6">
          <div class="lead text-left">
            <span class="h2">Jon & Corinna McMurray</span><br>
            X&hairsp;<sup>3</sup>Learning Berater<br>
            Grundschullehrer & Ergotherapeutin<br>
            <span class="text-muted">Toronto, Kanada</span>
          </div>
        </div>
      </div>

      <div class="row align-items-center justify-content-center my-3" id="jonathan">
        <div class="col-md-4 order-md-last">
          <img class="img-fluid mx-auto px-5" src="/_assets/img/team/jonathan-bauer.png"> 
        </div>
        <div class="col-md-6 order-md-first">
          <div class="lead text-right">
            <span class="h2">Jonathan Bauer</span><br>
            X&hairsp;<sup>3</sup>Learning Software-Architekt<br>
            Maschinenbau-Student (M.Sc.)<br>
            <span class="text-muted">Karlsruhe</span>
          </div>
        </div>
      </div>
    </div>

    <!--- MITMACHEN --->
    <div class="hr-divider">
      <h3 class="hr-divider-content hr-divider-heading text-3w">
          Teil des Teams werden
      </h3>
    </div>

    <div class="jumbotron mt-4" style="background-image: url('/_assets/img/jumbotron/sub-21.png'); background-position: center; background-size: cover;">
      <div class="container my-5">
        <div class="row justify-content-around"> 

          <div class="col-md-5">
            <div class="card bg-transparent border-0 h-100">
              <img src="/_assets/img/icons/jobs.png" class="card-img-top img-fluid mx-auto" style="width: 50%; max-height: 50%;">
              <div class="card-body p-3 mb-5">
                <p class="h2">Jobs</p>
                <p class="card-text text-justify lead my-3">
                  Für die Meisten von uns vereinnahmt der alltägliche Unterricht mit den Kindern und Jugendlichen den größten Teil unserer Arbeitszeit. Es gibt jedoch auch hinter den Kulissen viel zu tun, um Schülern, Eltern und Learning Coaches die bestmögliche Unterstützung zu garantieren und die Vision von X<sup>3</sup>Learning mitzutragen. Wir freuen uns über jeden, der unser Team mit seinen Fähigkeiten bereichern will und sind offen für deine Anregungen!
                </p>
              </div>
              <div class="bottom text-center">
                <button class="btn btn-lg btn-pill btn-info" id="signup-job">Initiativ Bewerben</button>
              </div>
            </div>
          </div>

          <div class="col-md-5">
            <div class="card bg-transparent border-0 h-100">
              <img src="/_assets/img/icons/learningcoaches.png" class="card-img-top img-fluid mx-auto" style="width: 50%; max-height: 50%;">
              <div class="card-body p-3 mb-5">
                <p class="h2">Learning Coach</p>
                <p class="card-text text-justify lead my-3">
                  Unsere Learning Coaches sind ein unverzichtbarer Bestandteil der Arbeit. Sie arbeiten unmittelbar an den Schülern und Schülerinnen, beobachten deren Fortschritt und organisieren und planen die Treffen in Eigenverantwortung. Unser Ziel ist es die Learning Coaches bestmöglich auszubilden und durch das X<sup>3</sup>LConcept mit Werkzeugen auszustatten, die Sie nicht nur im Förderunterricht voranbringen. 
                </p>
              </div>
              <div class="bottom text-center">
                <button class="btn btn-lg btn-pill btn-info" id="signup-lc">Learning Coach Werden</button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <?php include($IPATH."/_assets/html/footer.html"); ?>
    
    <!-- Include jQuery (required) and the JS -->
    <?php include($IPATH."/_assets/html/scripts.html"); ?>

    <script type="text/javascript">
      $('#forward-jumbo').click( function () {
        window.location.href = "/Concept/index.php";
      });

      $('#signup-job').click( function () {
        window.location.href = "/Contact/index.php";
      }) 
      $('#signup-lc').click( function () {
        window.location.href = "/Contact/index.php";
      }) 
    </script>
  </body>
</html>
