<?php
 include 'data.php';
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="public/css/app.css" type="text/css">
  </head>
  <body>
    <div class="container">
      <div class="card_container">
        <?php stampa_players($players);?>
      </div>
    </div>
  </body>
</html>
