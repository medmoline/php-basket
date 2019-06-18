<?php
 include 'data.php';
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="public/css/app.css">
  </head>
  <body>
    <div class="container">
      <div class="card_container">
        <div class="card">
          <?php stampa_players($players);?>
        </div>
      </div>
    </div>
  </body>
</html>
