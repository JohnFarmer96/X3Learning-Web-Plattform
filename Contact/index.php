<?php 
  $IPATH = $_SERVER["DOCUMENT_ROOT"]; 

  $error = "";
  $phpMailMessage = "";

  if(sizeof($_POST) != 0){

    if($_POST["name"] == "") {
      $error .= "Bitte tragen Sie einen Namen ein!<br>";
    } 

    if($_POST["email"] == "") {
      $error .= "Bitte tragen Sie eine E-Mail-Adresse ein!<br>";
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $error .= "E-Mail-Adresse ist nicht korrekt oder nicht gültig!<br>";
    }

    $phone = "";
    if($_POST["phone"] == "") {
      $phone = $_POST["phone"];
    } else {
      $phone = "none";
    }

    if($_POST["subject"] == "") {
      $error .= "Bitte tragen Sie einen Betreff ein!<br>";
    }

    if($_POST["message"] == "") {
      $error .= "Ihre Nachricht hat keinen Inhalt!<br>";
    }

    if($error != ""){
      $phpMailMessage = '<div class="alert alert-danger" role="alert"><p><strong>Ein Fehler ist aufgetreten:</strong></p>' .$error. '</div>';
    } else {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $to = "x3tutoring@gmail.com";

        $headers = $email;
        $personalInformation = "\n\n\n From: $name\n E-Mail: $email\n Tel.: $phone\n";

        if(mail($to, $subject, $message.$personalInformation, $headers)){
            $phpMailMessage = '<div class="alert alert-success" role="alert"><p><strong>Erfolgreich Versendet!</strong></p></div>';
        } else {
            $phpMailMessage = '<div class="alert alert-danger" role="alert"><p><strong>Deine E-Mail konnte nicht versendet werden. Bitte versuch es später nocheinmal oder kontaktiere uns telefonisch!</strong></p>' .$error. '</div>';
        }
    }

  }
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include($IPATH."/_assets/html/meta.html") ?>
    <meta name="format-detection" content="telephone=no">

    <style type="text/css">
    </style>
  </head>
  <body class="with-top-navbar">
          
    <?php include($IPATH."/_assets/html/header-view.html") ?>

    <!--Section: Contact v.2-->
    <div class="jumbotron my-5 py-5" style="background-image: url('/_assets/img/jumbotron/main-2.png'); background-position: center; background-size: cover;">
      <div class="container">
        <h1 class="display-4 text-center mb-3">Interesse geweckt?</h1>
        <p class="text-regular text-center mx-auto">Falls Sie Fragen haben oder mehr über uns wissen wollen, kontaktieren Sie uns gerne mit diesem Formular. Für dringende Angelegenheiten stehen wir Ihnen auch unter der unten angegebenen Telefonnummer zur Verfügung.</p>
        <div id="error" class="text-regular mb-5"><?php echo $phpMailMessage; ?></div>
        <div class="row">
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="md-form mb-0">
                                <label for="name" class="text-regular">Name</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="md-form mb-0">
                                <label for="email" class="text-regular">E-mail</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <label for="phone" class="text-regular">Telefonnummer (Optional)</label>
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="+49 1234 5678901">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <label for="subject" class="text-regular">Betreff</label>
                                <input type="text" id="subject" name="subject" class="form-control" value="Newsletter Anmeldung">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="md-form">
                                <label for="message" class="text-regular">Nachricht</label>
                                <textarea type="text" id="message" name="message" rows="6" class="form-control md-textarea">Hallo! Bitte melden Sie mich für den Hausaufgaben-Newsletter an!</textarea>
                            </div>
                        </div>
                    </div>
                    <button href="#" type="submit" class="btn btn-md btn-secondary">Senden</button>
                </form>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
              <ul class="list-unstyled mb-0">
                <li class="my-4">
                  <i class="icon icon-phone h1"></i>
                  <p class="text-regular">(+49) 176 22556313</p>
                </li>
                <li class="my-4">
                  <i class="icon icon-mail h1"></i>
                  <p class="text-regular">x3tutoring@gmail.com</p>
                </li>
                <li class="my-4">
                  <i class="icon icon-location h1"></i>
                  <p class="text-regular">Dieselstraße 5, 12057 Berlin, Deutschland</p>
                </li>
              </ul>
            </div>
        </div>
      </div>
    </div>

    <?php include($IPATH."/_assets/html/footer.html"); ?>

    <!-- Include jQuery (required) and the JS -->
    <?php include($IPATH."/_assets/html/scripts.html") ?>

    <script type="text/javascript">
      $("form").submit(function (e) {

      let error = "";

      if($("#name").val() == "") {
          error += "Bitte tragen Sie einen Namen ein!<br>";
      }

      if($("#email").val() == "") {
          error += "Bitte tragen Sie eine E-Mail-Adresse ein<br>";
      }

      if($("#subject").val() == "") {
          error += "Bitte tragen Sie einen Betreff ein<br>";
      }

      if($("#content").val() == "") {
          error += "Ihre Nachricht hat keinen Inhalt<br>";
      }

      if(error != "") {
          $("#error").html( '<div class="alert alert-danger" role="alert"><p><strong>Ein Fehler ist aufgetreten:</strong></p>' + error + '</div>');
          return false;
      } else {
          return true;
      }
      });


    </script>
  </body>
</html>