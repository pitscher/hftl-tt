<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tele Tutorien abrufen">
    <meta name="author" content="Pitscher">
    <link rel="icon" href="favicon.ico">

    <title>Teletutorien abrufen</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="swal/css/sweetalert2.css" rel="stylesheet">
    <script src="swal/js/sweetalert2.js"></script>
    <script src="swal/js/core.js"></script>
  </head>

  <body>
    <button type="button" data-toggle="modal" data-target="#info-modal" class="btn btn-default info-btn"><b>?</b></button>
      <section id="loginform" class="outer-wrapper">
        <div class="inner-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-sm-4 col-sm-offset-4">
                <h1 class="text-center">Quizfrage</h1>
                <h3 class="text-center">Bist du wirklich ein Kommilitone?</h3><br>
                <form role="form" action="agent.php" method="post">
                  <div class="form-group form-group-lg">
                    <label for="hochschulname">Abkürzung unserer Hochschule</label>
                    <input type="password" class="form-control" name="nutzerEingabe" data-toggle="tooltip" data-placement="down" title="Hinweis: Es wird nur die Abkürzung erkannt!">
                  </div>
                  <button type="submit" class="btn btn-primary">Absenden</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>


<!-- INFO-MODAL -->
      <div id="info-modal" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Was soll diese Abfrage?</b></h4>
            </div>
            <div class="modal-body">
              <p>In Rücksprache mit unseren Prof's habe ich mich dazu entschieden, dass die aufgenommenen TT's nicht für jedermann zugänglich gemacht werden.<br>
              Das lässt sich unter anderem über eine private YouTube-Playlist realisieren.<br>
            Falls jemand vergisst, sich den Link der Playlist abzuspeichern, bietet diese Seite die Möglichkeit, die besagte Playlist dennoch aufrufen zu können.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
            </div>
          </div>
        </div>
      </div>
<!-- INFO-MODAL ENDE -->

    <!-- Bootstrap-JavaScript
    ================================================== -->
    <!-- Am Ende des Dokuments platziert, damit Seiten schneller laden -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
