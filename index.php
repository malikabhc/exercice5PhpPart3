<?php
  $arrived = 1;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5/3</title>
  </head>
  <body>
    <p>
      <?php
        while ($arrived < 15) {
          $arrived++;
          echo 'On y arrive presque';
        }
      ?>
    </p>
  </body>
</html>
