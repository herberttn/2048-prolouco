<html>
  <body>
    <?php
      for ($x = 0; $x <= 3; $x++) {
        for ($y = 0; $y <= 3; $y++) {
          echo $_GET["cell$x$y"] . "<br/>";
        }
      }
    ?>
  </body>
</html>