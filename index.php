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

      /* Extra small devices (phones, 600px and down) */
      @media only screen and (max-width: 600px) {
        .carousel-inner {
          height: 540px;
        }
      }

      /* Small devices (portrait tablets and large phones, 600px and up) */
      @media only screen and (min-width: 600px) {
        .carousel-inner {
          height: 600px;
        }
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

    <!--- CORONA MODAL --->
    <div class="modal" id="popup" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Aus aktuellem Anlass</h5>
            <button type="button" id="close-tag" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Wir sind in Zeiten der Krise für euch da: Schickt jetzt eine E-Mail oder WhatsApp für unseren kostenlosen Hausaufgabenchat!</p>
          </div>
          <div class="modal-footer">
            <button type="button" id="forward" class="btn btn-primary">Weiter zur Anmeldung</button>
            <button type="button" id="close-button" class="btn btn-secondary" data-dismiss="modal">Schließen</button>
          </div>
        </div>
      </div>
    </div>

    <!--- ENTERING JUMBOTRON --->
    <div class="jumbotron-fluid my-5 py-5" style="background-image: url('/_assets/img/jumbotron/main-1.png'); background-size: cover; background-position: center; min-height: 600px;">
      <div class="container my-5">
        <div class="row">
          <div class="col-md-9 mx-3">
            <p class="text-left text-uppercase font-weight-normal text-8w my-5">X&hairsp;<sup>3</sup> Learning</p>
            <p class="text-left text-5w mb-3">Zukunftsorientierte Bildung.</p>
            <p class="text-left text-5w">Für Alle.</p>
            <button type="button" id="forward-jumbo" class="btn btn-secondary btn-lg btn-pill float-left my-5">Unser Konzept</button>
          </div>         
        </div>
      </div>
    </div>
    
    <!--- WHAT PEOPLE SAY ABOUT US --->
    <div class="hr-divider">
      <h3 class="hr-divider-content hr-divider-heading text-3w">
        Das Sagen Andere Über Uns 
      </h3>
    </div>

    <div id="carousel-quotes" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators ">
        <li data-target="#carousel-quotes" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-quotes" data-slide-to="1"></li>
        <li data-target="#carousel-quotes" data-slide-to="2"></li>
        <li data-target="#carousel-quotes" data-slide-to="3"></li>
        <li data-target="#carousel-quotes" data-slide-to="4"></li>
      </ol>

      <div class="container my-4">
        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="card bg-transparent border-0 h-100 mb-5">
              <img class="card-img-top img-fluid mx-auto" src="/_assets/img/quotes/frank-wagner.png" style="width: 50%; max-width: 300px;">
              <div class="text-center mt-5 mx-3">
                <p class="text-2w">
                  "Bildung im 21.Jahrhundert braucht uns alle. Schule kann und sollte sich im Stadtteil öffnen und alle verfügbaren Ressourcen einbinden, um unsere Kinder mit den notwendigen Kompetenzen der Zukunft auszustatten. Deshalb unterstütze ich die Initiative von X&hairsp;<sup>3</sup>Learning."
                <p>
              </div>
              <div class="text-center">
                <p class="text-2w text-muted">
                  Frank Wagner, Schulleiter Gebrüder-Grimm-Schule Hamm (Schule des Jahres 2019)
                <p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="card bg-transparent border-0 h-100 mb-5">
              <img class="card-img-top img-fluid mx-auto" src="/_assets/img/quotes/momo.png" style="width: 50%; max-width: 300px;">
              <div class="text-center mt-5 mx-3">
                <p class="text-2w">
                  "Ich bin sehr sehr zufrieden mit meinem Nachhilfelehrer. Alles was ich nicht Verstanden habe, konnte ich im Förderunterricht bearbeiten. Das hat mir sehr geholfen. Ich bin sehr sehr dankbar für das Programm und werde das Angebot weiterhin nutzen!"
                <p>
              </div>
              <div class="text-center">
                <p class="text-2w text-muted">
                  Momo, Schüler
                <p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="card bg-transparent border-0 h-100 mb-5">
              <img class="card-img-top img-fluid mx-auto" src="/_assets/img/quotes/meeti-hewig.png" style="width: 50%; max-width: 300px;">
              <div class="text-center mt-5 mx-3">
                <p class="text-2w">
                  "Es ist für mich eine Bereicherung als Learning Coach zu arbeiten, weil ich die Kinder mit den Familien zusammen begleiten darf, Beziehungen aufbaue und sehe wie sie schulische Fortschritte machen und auch persönlich wachsen. Zudem macht es mich zu einem geduldigeren Menschen und inspiriert mich mein eigenes Lernen in der Uni effektiver zu gestalten."
                <p>
              </div>
              <div class="text-center">
                <p class="text-2w text-muted">
                  Meeti Hewig, Learning Coach
                <p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="card bg-transparent border-0 h-100 mb-5">
              <img class="card-img-top img-fluid mx-auto" src="/_assets/img/quotes/adel.png" style="width: 50%; max-width: 300px;">
              <div class="text-center mt-5 mx-3">
                <p class="text-2w">
                "Der Unterricht ist sehr hilfreich für uns Schüler. Wir haben sonst niemanden, mit dem wir lernen und ist es sehr schwer alleine klarzukommen. In den Nachhilfestunden bekommen wir die Möglichkeit, die Themen aus der Schule nochmal mit Unterstützung zu wiederholen. Das hilft mir sehr.“
                <p>
              </div>
              <div class="text-center">
                <p class="text-2w text-muted">
                  Adel, Schüler
                <p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="card bg-transparent border-0 h-100 mb-5">
              <img class="card-img-top img-fluid mx-auto" src="/_assets/img/quotes/simon-geissendoerfer.png" style="width: 50%; max-width: 300px;">
              <div class="text-center mt-5 mx-3">
                <p class="text-2w">
                  "Als Learning Coach zu arbeiten ist zwar herausfordernd, aber gleichzeitig unglaublich bereichernd und wahrscheinlich der erfüllendste Nebenjob den ich je hatte."
                <p>
              </div>
              <div class="text-center">
                <p class="text-2w text-muted">
                  Simon Geissendörfer, Learning Coach
                <p>
              </div>
            </div>
          </div>

        </div>
      </div>

      <a class="carousel-control-prev" href="#carousel-quotes" role="button" data-slide="prev">
        <span class="icon icon-chevron-thin-left" aria-hidden="false"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-quotes" role="button" data-slide="next">
        <span class="icon icon-chevron-thin-right" aria-hidden="false"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!---GET ENGAGED --->
    <div class="hr-divider">
      <h3 class="hr-divider-content hr-divider-heading text-3w">
          Selbst profitieren
      </h3>
    </div>

    <div class="jumbotron-fluid my-5 py-5" style="background-image: url('/_assets/img/jumbotron/sub-21.png'); background-position: center; background-size: cover;">
      <div class="container my-5">
        <div class="row">

          <div class="col-lg-4">
            <div class="card bg-transparent border-0 h-100">
              <img src="/_assets/img/icons/students.png" class="card-img-top img-fluid mx-auto my-5" style="width: 50%;">
              <div class="p-3 mb-5">
                <p class="h2">Schüler/-innen</p>
                <div class="card-text my-3">
                  <p class="lead"> Du bist ein neugieriger Schüler, der bereit ist an sich zu arbeiten? Du willst endlich langfrisitige Erfolge sehen und Neues dazulernen? Wir unterstützen dich gerne!</p>
                </div>   
              </div>
              <div class="bottom text-center">
                <button class="btn btn-lg btn-pill btn-info" id="signup-student">Als Schüler Registrieren</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card bg-transparent border-0 h-100">
              <img src="/_assets/img/icons/learningcoaches.png" class="card-img-top img-fluid mx-auto my-5" style="width: 50%;">
              <div class="p-3 mb-5">
                <p class="h2">Learning Coaches</p>
                <div class="card-text my-3">
                  <p class="lead">Du bist begeistert vom Lernen und möchtest deine Erfahrung anderen weitergeben? Du bist der Meinung, dass im Leben mehr zählt als gute Noten? Wir suchen genau dich!</p>
                </div>          
              </div>
              <div class="bottom text-center">
                <button class="btn btn-lg btn-pill btn-info" id="signup-lc">Learning Coach Werden</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card bg-transparent border-0 h-100">
              <img src="/_assets/img/icons/parents.png" class="card-img-top img-fluid mx-auto my-5" style="width: 50%;">
              <div class="p-3 mb-5">
                <p class="h2">Eltern</p>
                <div class="card-text my-3">
                  <p class="lead"> Dir ist der langfristige Erfolg deines Kindes wichtig und du suchst nach der richtigen Unterstützung? Lerne unsere Learning Coaches kennen und überzeuge dich selbst, wie wir euch begleiten können! </p>
                </div>          
              </div>
              <div class="bottom text-center">
                <button class="btn btn-lg btn-pill btn-info" id="signup-parent">Mein Kind Anmelden</button>
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
      window.onload = $('#popup').css("display", "block");

      $('#close-tag').click( function () {
        $('#popup').css("display", "none");
      });

      $('#close-button').click( function () {
        $('#popup').css("display", "none");
      });

      $('#forward').click( function () {
        window.location.href = "/Contact/index.php";
      });

      $('#forward-jumbo').click( function () {
        window.location.href = "/Concept/index.php";
      });

      $('#signup-student').click( function () {
        window.location.href = "/Contact/index.php";
      });

      $('#signup-lc').click( function () {
        window.location.href = "/Contact/index.php";
      });

      $('#signup-parent').click( function () {
        window.location.href = "/Contact/index.php";
      });
      
    </script>
  </body>
</html>