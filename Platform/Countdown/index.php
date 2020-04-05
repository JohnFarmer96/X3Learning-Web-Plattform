<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include($IPATH."/_assets/html/meta.html") ?>

    <title>X3Learning</title>
  </head>
  <body class="with-top-navbar">

    <?php include($IPATH."/_assets/html/header-view.html"); ?>

    <div class="with-iconav">
        
        <?php include($IPATH."/_assets/html/header-platform.html"); ?>
    
        <div class="container-fluid mx-5 pb-5" style="margin-top: 120px">
            <div class="dashhead">
                <div class="dashhead-titles">
                    <p class="dashhead-subtitle">X&hairsp;<sup>3</sup> Learning Lernplattform</p>
                    <p class="dashhead-title text-6w">Übersicht</p>
                </div>
            </div>
            <p class="text-4w">Hier entsteht gerade etwas neues!</p>
            <p class="text-3w">Updates folgen!</p>
            <img class="img-fluid mb-5" src="/_assets/img/design/coding.png">
        </div>

    </div>
  
    <?php include($IPATH."/_assets/html/footer.html"); ?>

    <!-- Include jQuery (required) and the JS -->
    <?php include($IPATH."/_assets/html/scripts.html"); ?>

    <script src="/_assets/js/chart.js"></script>
    <script src="/_assets/js/tablesorter.min.js"></script>
    <script src="/_assets/js/application.js"></script>
    <script type="text/javascript">
      // execute/clear BS loaders for docs
      $(function(){while(window.BS&&window.BS.loader&&window.BS.loader.length){(window.BS.loader.pop())()}})
    </script>

  </body>
</html>