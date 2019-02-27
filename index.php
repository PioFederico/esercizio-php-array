<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Hello</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <ul>
            <?php
            $A = ['mela','kiwi','pera','banana'];
            for ($i=0;$i<count($A);$i++) {
              print'<li>'.$A[$i].'</li>';
            }
            ?>
            </ul>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"> </script>
    <script src="js/popper.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script>
  </body>
</html>