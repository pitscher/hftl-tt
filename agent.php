<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Überprüfung</title>
    <link href="swal/css/sweetalert2.css" rel="stylesheet">
    <script src="swal/js/sweetalert2.js"></script>
    <script src="swal/js/core.js"></script>
  </head>
  <body>

    <?php

      if(htmlspecialchars($_POST['nutzerEingabe']) == "") {

        echo "
          <script>
            swal({
              title: 'Fehler',
              text: 'Bitte das Feld ausfüllen!',
              type: 'error',
              showConfirmButton: false,
              allowOutsideClick: false,
              allowEscapeKey: false
            })
          </script>
        ";
        header('refresh: 5; url=index.php');

      } else {

        if(htmlspecialchars($_POST['nutzerEingabe']) == "hftl" OR htmlspecialchars($_POST['nutzerEingabe']) == "HfTL" OR htmlspecialchars($_POST['nutzerEingabe']) == "HFTL") {

          echo "
            <script>
              swal({
                title: 'Eingabe korrekt',
                text: 'Einen Moment bitte, Du wirst gleich weitergeleitet',
                type: 'success',
                showConfirmButton: false,
                allowOutsideClick: false,
                allowEscapeKey: false
              })
            </script>
          ";
          header('refresh: 5; url=https://www.youtube.com/playlist?list=PLL5DZ_SdSwMShIMWN6gk4Jcbbcc-gAeM2');

        } else {

          echo "
            <script>
              swal({
                title: 'Fehler',
                text: 'Diese Eingabe war nicht korrekt!',
                type: 'error',
                showConfirmButton: false,
                allowOutsideClick: false,
                allowEscapeKey: false
              })
            </script>
          ";
          header('refresh: 5; url=index.php');

        }
      }

    ?>

  </body>
</html>
